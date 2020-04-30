<?php


namespace App\Http\Controllers;


trait NotificationTrait
{
    public static function SuccessOperation(){
        return notify()->success('<b>Congratulation!!</b> Success Operation','Success Operation');
    }
    public static function FailOperation(){
        return notify()->error('<b>Sorry!!</b> Failed Operation','Failed Operation');
        //return connectify('success', 'Connection Found', 'Success Message Here');
        //return drakify('success');
        //return drakify('error');
        //return smilify('success', 'You are successfully reconnected');
        //return emotify('success', 'You are awesome, your data was successfully created');


    }
    public static function SuccessUpdate(){
        return notify()->success('<b>Congratulation!!</b> Data Updated Successfully','Success Operation');

    }
    public static function SuccessCreate(){
        return notify()->success('<b>Congratulation!!</b> Data Inserted Successfully','Success Operation');

    }
    public static function SuccessDelete(){
        return notify()->success('<b>Congratulation!!</b> Data Deleted Successfully','Success Operation');
    }
    public static function TrashedSuccessfully(){
        return notify()->success('<b>Congratulation!!</b> Record Added To Trash Successfully','Success Operation');
    }
    public static function RestoredSuccessfully(){
        return notify()->success('<b>Congratulation!!</b> Record Restored Successfully','Success Operation');
    }
    public static function Authorization(){
        return notify()->error('<b>Sorry!!</b> You Dont Have Permission To Access This Page','Authorization Error');
    }
    public static function NotFound(){
            return notify()->error('<b>Sorry!!</b> Not Found','Error');
    }
    public static function TelegramNotFound(){
        return notify()->error('<b>Sorry!!</b> Telegram Id Invalid','Error');
    }
}
