<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\OrderScope;


class Work extends Model
{

    protected $fillable = ['name', 'content', 'image_name', 'caption', 'program_id','status' ];


    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }

}
