<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\VideoCategory;
use Systems\Scopes\OrderScope;


class Video extends Model
{
  protected $fillable = ['videoURL', 'videoID', 'image_name', 'title', 'status', 'caption', 'count' ,'video_categories_id'];

  public function videoCategory(){
    return $this->hasOne('Systems\VideoCategory' , 'id','video_categories_id');
  }

  protected static function boot() {
      parent::boot();
      static::addGlobalScope(new OrderScope('id', 'desc'));
  }

}
