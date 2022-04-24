<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\OrderScope;


class Job extends Model
{

    protected $fillable = ['title', 'deadline', 'location','image_name','caption','content', 'duration',
        'how_to_apply','user_id', 'status' ];



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
