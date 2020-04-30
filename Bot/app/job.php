<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class job extends Model
{
    protected $fillable=['title','department','status','in','from','to','time','days','msgstatus','type','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
