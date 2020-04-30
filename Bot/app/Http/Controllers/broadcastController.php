<?php

namespace App\Http\Controllers;

use App\Broadcast;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use App\Notifications\TelegramNotification;
class broadcastController extends Controller
{
    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $broadcast=Broadcast::all();
       return view('dashboard.broadcast.index',compact('broadcast'));
    }

    public function create()
    {
        return view('dashboard.broadcast.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'from'=>'required|date',
            'to'=>'required|date',
            'days'=>'required|array|min:1',
            'time'=>'required',
            'file'=>'image',
        ]);


        $status=($request->has('status'))?true:false;
        $datefrom=date('Y-m-d',strtotime($request->from));
        $dateto=date('Y-m-d',strtotime($request->to));

        if ($request->hasFile('file')){
            $request->file('file')->store('');
            $path=$request->file('file')->hashName();
        }else{
            $path=null;
        }
        $job=Broadcast::create([
            'title'=>$request->title,
            'department'=>$request->department,
            'from'=>$datefrom,
            'to'=>$dateto,
            'time'=>$request->time,
            'status'=>$status,
            'days'=>json_encode($request->days),
            'type'=>'daily',
            'file'=>$path,
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessCreate():self::FailOperation();
        return redirect(route('broadcast.index'));
    }

    public function show($id)
    {
        $job=Broadcast::find($id);
        if (!$job) {
            self::NotFound();
            return redirect(route('broadcast.index'));
        }
        return view('dashboard.broadcast.details',compact('job'));
    }

    public function edit($id)
    {
        $job=Broadcast::where('user_id',auth()->user()->id)->where('id',$id)->first();
        if ($job){
            return view('dashboard.broadcast.edit',compact('job'));

        }   else{
            self::NotFound();
               return redirect('broadcast.index');
        }
    }

    public function update(Request $request, $id)
    {

        $job=Broadcast::where('user_id',auth()->user()->id)->where('id',$id)->first();
        if (!$job){
            self::NotFound();
            //return redirect('broadcast.index');
        }
        $request->validate([
            'title'=>'required|string|max:191',
            'department'=>'required|string:max:191',
            'from'=>'required|date',
            'to'=>'required|date',
            'days'=>'required|array|min:1',
            'time'=>'required',
            'file'=>'image',
        ]);


        $status=($request->has('status'))?true:false;
        $datefrom=date('Y-m-d',strtotime($request->from));
        $dateto=date('Y-m-d',strtotime($request->to));

        if ($request->hasFile('file')){
            if ($job->file){
                Storage::disk('public_uploads')->delete($job->file);
            }
            $request->file('file')->store('');
            $path=$request->file('file')->hashName();
        }else{
            $path=$job->file;
        }
        $job->update([
            'title'=>$request->title,
            'department'=>$request->department,
            'from'=>$datefrom,
            'to'=>$dateto,
            'time'=>$request->time,
            'status'=>$status,
            'days'=>json_encode($request->days),
            'type'=>'daily',
            'file'=>$path,
            'msgstatus'=>0,
            'user_id'=>auth()->user()->id
        ]);
        ($job)?self::SuccessUpdate():self::FailOperation();
        return redirect(route('broadcast.index'));
    }

    public function destroy($id){
        $job=Broadcast::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('broadcast.index'));
        }
        if ($job->file){
            Storage::disk('public_uploads')->delete($job->file);
        }
        $job->delete();
        self::SuccessDelete();
        return redirect(route('broadcast.index'));
    }

    public function status($id){
        $job=Broadcast::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('broadcast.index'));
        }
        $job->status=($job->status)?false:true;
        $job->save();
        self::SuccessOperation();
        return redirect()->back();
    }

    public function broadcast($id){
        $job=Broadcast::where('id',$id)->first();
        if (!$job) {
            self::NotFound();
            return redirect(route('broadcast.index'));
        }
        $users=User::where('subscribe',true)->get();

        foreach ($users as $user){
            $x=new TelegramNotification($user->tid,$job);
            Notification::send(null,$x);
        }
        self::SuccessOperation();
        return redirect()->back();
    }
}
