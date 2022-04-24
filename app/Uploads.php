<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $fillable = ['name', 'status', 'link'];
}
