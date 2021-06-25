<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSubjects extends Model
{
    protected $table='teacher_subjects';


    public function subject()
    {
        return $this->hasOne('App\Models\Subjects','id','subject1_id');
    }
}
