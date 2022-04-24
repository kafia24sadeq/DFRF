<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Systems\Scopes\OrderScope;


class Page extends Model
{
  protected $fillable = ['title', 'content', 'status'];

  protected static function boot() {
      parent::boot();
      static::addGlobalScope(new OrderScope('id', 'desc'));
  }


}
