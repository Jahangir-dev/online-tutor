<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_Gigs extends Model
{
    protected $table='teacher_gigs';


    public function users()
    {
    	return $this->hasOne('App\User','id','tutor_id');
    }

     public function category()
    {
    	return $this->hasOne('App\Models\SubjectCategories','id','category_id');
    }


    public function teachersubject()
    {
        return $this->hasOne('App\Models\TeacherSubjects','user_id','tutor_id');
    }
}
