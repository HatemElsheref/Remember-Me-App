<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class TelegramNotification extends Notification
{

    public $id=null;
    public $message="Application Remember You => You Have A job Now With Title ";
    public $file=null;

    public function __construct($id,$job)
    {
        $this->id=$id;
        $this->message.=$job->title.' At Department '.$job->department;
        $this->file=$job->file;

    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        if ($this->file){
            return TelegramMessage::create()
                ->to($this->id)
                ->content($this->message);
//                ->photo('https://file-examples.com/wp-content/uploads/2017/10/file_example_JPG_1MB.jpg');
//                ->button(asset('uploads/'.$this->file),'https://www.facebook.com');
        }   else{
            return TelegramMessage::create()
                ->to($this->id)
                ->content($this->message);
        }


    }
}
