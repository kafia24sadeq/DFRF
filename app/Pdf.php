<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\CategoryScope;


class Pdf extends Model
{
    protected $fillable = ['name','image_name','caption', 'link' , 'status'];


    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }
}
