<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        protected $fillable = ['name', 'image_name','description','course_content', 'course_time', 'starting_date','availability','trainer_name','hours_no','status'];


        public function applicant()
        {
           return $this->hasOne(Applicant::class);
        }
}
