<?php

namespace Systems;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Systems\Scopes\OrderScope;



class User extends Authenticatable
{
  use EntrustUserTrait;
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password','remember_token', 'status'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function posts(){
      return $this->hasMany('Systems\Post' , 'user' );
  }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }
}

