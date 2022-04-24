<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\OrderScope;


class Program extends Model
{

    protected $fillable = ['name', 'content','areas', 'image_name', 'caption', 'budget','total_beneficiaries' ,'activities','status' ];


    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderScope('id', 'desc'));
    }

}
