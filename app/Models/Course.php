<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Semester;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Attendance;

class Course extends Model
{
    public function semesters(){
        return $this->belongsToMany(Semester::class, 'course_semester', 'course_id', 'semester_id');
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class, 'course_teacher', 'course_id', 'teacher_id');
    }
    public function students(){
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
