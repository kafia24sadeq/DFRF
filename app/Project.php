<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['applicants_num', 'trainees_num','centers_num' ,'courses_no'];
}
