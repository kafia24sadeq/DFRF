<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;



class PollsQuestions extends Model
{

    protected $fillable = ['question' , 'status'];
    public function options(){
        return $this->hasMany('Systems\PollsOption' , 'poll_question_id');
    }


}
