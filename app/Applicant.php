<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'qualification',
        'birth_date',
        'card_no',
        'card_source',
        'mobile',
        'home',
        'sex',
        'computer',
        'english',
        'work',
        'card_image',
        'cert_image',
        'course_id',
        'group_id',
    ];

    public function getFullNameAttribute() {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->second_name) .' ' . ucfirst($this->third_name) .' ' . ucfirst($this->last_name);
    }
    public function course()
    {
       return $this->belongsTo(Course::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
