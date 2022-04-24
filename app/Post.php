<?php

namespace Systems;

use Systems\Scopes\OrderScope;
use Systems\Scopes\ScheduleScope;

use Illuminate\Database\Eloquent\Model;
use Systems\Category;
use Systems\Image;
use Systems\User;

class Post extends Model
{

  protected $fillable = [
    'title', 'content', 'source','tags', 
    'count','image_name','caption','status',
    'date','type','category_id',
    'importance','comments_status',
    'user_id'
  ];

  protected $guarded = ['id'];

  public function categories(){
    return $this->hasOne('Systems\Category' , 'id','category_id');
  }

  public function images(){
    return $this->hasOne('Systems\Image' , 'id','image_name');
  }

    public static function news(){
             return Post::where('type',"=",0 );
    }

    public function publisher(){
        return $this->hasOne('Systems\User' , 'id','user_id');
    }


    public  function getImage(){

        if ($this->type == 0) {
            if (!isset($this->images->name)) {
                return "";

            } else {
                return $this->images->name;

            }
        }
    }




  protected static function boot() {
      parent::boot();
      static::addGlobalScope(new OrderScope('id', 'desc'));

      static::addGlobalScope(new ScheduleScope());
  }
}
