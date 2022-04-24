<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =[
      'name'  ,
      'content',
      'image_name',
      'status',
    ];
}
