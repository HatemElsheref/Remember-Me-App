<?php

namespace App\Http\Controllers;

use App\job;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;

class TGController extends Controller
{
//        public function send(){
//// $x=new TelegramNotification('-1035885626');
////$x=new TelegramNotification('962335333');
// $x=new TelegramNotification('1035885626');
//
//
//
//var_dump($x);
//            auth()->user()->notify($x);
//        //    auth()->user()->notify(new TelegramNotification('-962335333'));
//        }
public function  test(){
    //$x=new TelegramNotification('1035885626','from command');
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
                        if (abs($mindiff)>=0 and abs($mindiff)<=30){
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
