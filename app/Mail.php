<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['name' , 'email','ip','code','message', 'status'];
}
