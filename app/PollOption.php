<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $fillable = ['name' , 'poll_question_id' , 'votes'];

}
