<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Usre;
use Systems\Scopes\OrderScope;


class Task extends Model
{
  protected $fillable = ['title','desc','state','priority','user' ,'fromuser','deadline', "status"];

  public function responsible(){
    return $this->belongsTo('Systems\User' , 'user','id');

  }


  public function fromwho(){
    return $this->belongsTo('Systems\User' , 'fromuser','id');

  }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }
}
