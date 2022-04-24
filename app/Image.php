<?php

namespace Systems;

use Systems\Scopes\OrderScope;


use Illuminate\Database\Eloquent\Model;
use Systems\ImageCategory;


class Image extends Model
{

  protected $fillable = ['name', 'caption','content','image_categories_id','status' , 'link'];


  public function imageCategory(){
        return $this->hasOne('Systems\ImageCategory' , 'id','image_categories_id');
  }

  protected static function boot() {
      parent::boot();
      static::addGlobalScope(new OrderScope('id', 'desc'));
  }

}
