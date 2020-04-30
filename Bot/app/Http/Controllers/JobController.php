<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    use NotificationTrait;
    public function index(){
//        $annualJobs=Job::where('in','!=',null)->get();

        $annualJobs=Job::where('type','annual')->where('user_id',auth()->user()->id)->get();
        $dailyJobs=Job::where('type','daily')->where('user_id',auth()->user()->id)->get();
        return view('dashboard.jobs.index',['annualJobs'=>$annualJobs,'dailyJobs'=>$dailyJobs]);
    }

    public function showAll(){
        $jobs=job::where('user_id',auth()->user()->id)->latest()->get();
        return view('dashboard.jobs.showall',compact('jobs'));
    }

    public function show($id){
        $job=job::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('job.index'));
        }

        return view('dashboard.jobs.job_detail',compact('job'));
    }

    public function create_annual_job(){
        return view('dashboard.jobs.create_annual');
    }

    public function create_daily_job(){
        return view('dashboard.jobs.create_daily');
    }

    public function store_annual_job(Request $request){
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'in'=>'required|date',
        ]);


        $status=($request->has('status'))?true:false;
        $dateIn=date('Y-m-d',strtotime($request->in));

        $job=job::create([
            'title'=>$request->title,
            'department'=>$request->department,
            'in'=>$dateIn,
            'status'=>$status,
            'type'=>'annual',
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessCreate():self::FailOperation();
        return redirect(route('job.index'));

    }

    public function store_daily_job(Request $request){
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'from'=>'required|date',
            'to'=>'required|date',
            'days'=>'required|array|min:1',
            'time'=>'required',
        ]);


        $status=($request->has('status'))?true:false;
        $datefrom=date('Y-m-d',strtotime($request->from));
        $dateto=date('Y-m-d',strtotime($request->to));

        $job=job::create([
            'title'=>$request->title,
            'department'=>$request->department,
            'from'=>$datefrom,
            'to'=>$dateto,
            'time'=>$request->time,
            'status'=>$status,
            'days'=>json_encode($request->days),
            'type'=>'daily',
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessCreate():self::FailOperation();
        return redirect(route('job.index'));

    }

    public function edit_annual_job($id){
        $job=job::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('job.index'));
        }
        return view('dashboard.jobs.edit_annual',compact('job'));

    }

    public function edit_daily_job($id){
        $job=job::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('job.index'));
        }
        return view('dashboard.jobs.edit_daily',compact('job'));
    }

    public function update_annual_job(Request $request,$id){
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'in'=>'required|date',
        ]);


        $status=($request->has('status'))?true:false;
        $dateIn=date('Y-m-d',strtotime($request->in));

        $job=job::find($id)->update([
            'title'=>$request->title,
            'department'=>$request->department,
            'in'=>$dateIn,
            'status'=>$status,
            'type'=>'annual',
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessUpdate():self::FailOperation();
        return redirect(route('job.index'));

    }

    public function update_daily_job(Request $request,$id){
        $job=job::find($id);
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'from'=>'required|date',
            'to'=>'required|date',
            'days'=>'required|array|min:1',
            'time'=>'required',
        ]);


        $status=($request->has('status'))?true:false;
        $datefrom=date('Y-m-d',strtotime($request->from));
        $dateto=date('Y-m-d',strtotime($request->to));

        $job->update([
            'title'=>$request->title,
            'department'=>$request->department,
            'from'=>$datefrom,
            'to'=>$dateto,
            'time'=>$request->time,
            'status'=>$status,
            'days'=>json_encode($request->days),
            'type'=>'daily',
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessUpdate():self::FailOperation();
        return redirect(route('job.index'));
    }

    public function destroy($id){
        $job=job::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('job.index'));
        }
        $job->delete();
        self::SuccessDelete();
        return redirect(route('job.index'));
    }

    public function status($id){
        $job=job::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('job.index'));
        }
        $job->status=($job->status)?false:true;
        $job->save();
        self::SuccessOperation();
        return redirect()->back();
    }

}
