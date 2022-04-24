<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Image;

class ImageCategory extends Model
{
    protected $fillable = ['name', 'status'];

    public function images(){
        return $this->hasMany('Systems\Image' , 'imagecategory');
    }
}
