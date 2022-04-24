<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

use Systems\user;
class UserLog extends Model
{
  protected $fillable = ['user', 'action', 'desc', 'extra', 'ip'];



  public function publisher(){
    return $this->belongsTo('Systems\User' , 'user','id');
  }


}
