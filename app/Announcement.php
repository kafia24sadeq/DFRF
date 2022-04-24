<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\OrderScope;


class Announcement extends Model
{

    protected $fillable = ['title', 'link','image_name','caption','type','user_id', 'status', 'period' ];



    public function images(){
        return $this->hasOne('Systems\Image' , 'id','image_name');
    }


    public  function getImage(){
        if (!isset($this->images->name)){
            return "";

        }else{
            return $this->images->name;

        }
    }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }

    public function publisher(){
        return $this->belongsTo('Systems\User' , 'user_id','id');
    }

}
