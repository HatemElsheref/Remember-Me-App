<?php

namespace App\Console\Commands;

use App\Notifications\TelegramNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Ixudra\Curl\Facades\Curl;
use App\job;
class RememberCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remember:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        //$x=new TelegramNotification('1035885626','from command');
//        $url="https://api.telegram.org/bot";
//        $token=env('TELEGRAM_BOT_TOKEN');
//        $params='/sendMessage?chat_id=1035885626&text=schedular running';
//        $response=Curl::to($url.$token.$params)->get();
//
        $ReadyJobsWithUsers=[];
        $currentTime=time();
        $curDay=date('Y-m-d',$currentTime);
        $curDayName=strtolower(date('l',$currentTime));
        $curHour=date('h',$currentTime);
        $curMinutes=date('i',$currentTime);
        $curMidnight=date('A',$currentTime);
        $jobs=job::where('status',true)->where('type','daily')->where('msgstatus',0)->get();
        //dd($jobs);
        foreach ($jobs as $job){
            $jobdays=json_decode($job->days);
            $jobFrom=$job->from;
            $jobTo=$job->to;
            $jobTime=$job->time;
            $jobHour=explode(':',$jobTime)[0];
            $jobMid=explode(' ',$jobTime)[1];
            $tmpArray=explode(':',explode(' ',$jobTime)[0]);
            $jobMin=end($tmpArray);
            if ($curDay>=$jobFrom and $curDay<=$jobTo){
//            dd('cond1');
//            dd($jobdays);
                if (in_array($curDayName,$jobdays)){
//                dd('cond2');
                    if ($curMidnight==$jobMid){
//                    dd('cond3');
                        if ($curHour==$jobHour){
//                        dd('cond4');
                            $mindiff=$curMinutes-$jobMin;
                            if (abs($mindiff)>=0 and abs($mindiff)<=5){
//                            dd('cond5');
                                array_push($ReadyJobsWithUsers,$job);
                            }
                        }
                    }
                }
            }
        } //end for
//    dd($ReadyJobsWithUsers);
        foreach ($ReadyJobsWithUsers as $job){
//            $url="https://api.telegram.org/bot";
//            $token=env('TELEGRAM_BOT_TOKEN');
//            $params='/sendMessage?chat_id=1035885626&text=schedular running';
//            $response=Curl::to($url.$token.$params)->get();
            $Message="Application Remember You With Job ".$job->title.' That Your Classified it At '.$job->department;
//        dd($job->user->tid);
            $TID=$job->user->tid;
            Notification::send(null,new TelegramNotification($TID,$Message));
            $tmp=job::find($job->id);
            $tmp->msgstatus=1;
            $tmp->save();
        }
    }
}
