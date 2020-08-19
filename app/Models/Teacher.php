<?php

namespace App\Models;
use App\User;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_teacher', 'teacher_id', 'course_id');
    }
}
