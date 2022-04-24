<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Video;

class VideoCategory extends Model
{
  protected $fillable = ['name', 'status'];

  public function video(){
    return $this->hasMany('Systems\Video' , 'video_categories_id');
  }
}
