<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    protected $fillable=['title','department','status','file','from','to','time','days','msgstatus','type','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
