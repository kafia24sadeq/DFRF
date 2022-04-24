<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\ProductCategory;
use Systems\Company;
use Systems\Scopes\OrderScope;


class Product extends Model
{
  protected $fillable = ['name', 'price','content','warranty', 'image_name','other_images', 'status', 'caption', 'discount' ,'product_categories_id'
  ,  'user_id'];

  public function productCategory(){
    return $this->hasOne('Systems\ProductCategory' , 'id','product_categories_id');
  }

    public function publisher(){
        return $this->hasOne('Systems\User' , 'id','user_id');
    }
    public function company(){
      return $this->belongsTo('Systems\Company','id'); 
    }

    protected static function boot() {
      parent::boot();
      static::addGlobalScope(new OrderScope('id', 'desc'));
  }

 

}
