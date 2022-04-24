<?php

namespace Systems;

use Systems\Product;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['title', 'description','image_name', 'location', 'status'];
// 
    public function products()
    {
        return $this->hasMany('System\Product','company_id');
    }
}
