<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
      'name','status'
    ];

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

}
