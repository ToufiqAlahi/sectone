<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Teacher;
class Department extends Model
{
    protected $table = 'departments';

     public function students(){
         return $this->hasMany(Student::class);
     }

     public function teachers(){
        return $this->hasMany(Teacher::class);
    }

     public function semester(){
         return $this->belongsToMany(Semester::class, 'department_semester', 'department_id', 'semester_id');
     }

     public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
