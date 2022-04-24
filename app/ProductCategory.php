<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Product;

class ProductCategory extends Model
{
  protected $fillable = ['name', 'status'];

  public function product(){
    return $this->hasMany('Systems\Product' , 'product_categories_id');
  }
}
