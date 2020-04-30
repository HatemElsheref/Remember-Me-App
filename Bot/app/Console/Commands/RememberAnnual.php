<?php

namespace App\Console\Commands;

use App\job;
use App\Notifications\TelegramNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class RememberAnnual extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remember:annual';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Used To Make Remember Msg For User For Annual Jobs';

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
        $dateIn=date('Y-m-d');
        $jobs=job::where('msgstatus',0)->where('type','annual')->where('status',true)->where('in',$dateIn)->get();
             foreach ($jobs as $job){
                 $Message="Application Remember You With Job ".$job->title.' That Your Classified it At '.$job->department;
                 $TID=$job->user->tid;
                 Notification::send(null,new TelegramNotification($TID,$Message));
                 $tmp=job::find($job->id);
                 $tmp->msgstatus=1;
                 $tmp->save();
             }
    }
}
