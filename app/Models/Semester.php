<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Department;
use App\Models\Attendance;
class Semester extends Model
{
    protected $table = 'semesters';

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_semester');
    }

    public function departments(){
        return $this->belongsToMany(Department::class, 'department_semester', 'semester_id', 'department_id');
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
