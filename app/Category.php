<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\CategoryScope;


use Systems\Post;

class Category extends Model
{

    protected $guarded = ['id'];

    public function posts(){
        return $this->hasMany('Systems\Post' , 'category_id');
    }



    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new CategoryScope('menuorder', 'asc'));

    }







}
