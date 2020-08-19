<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use App\Models\Semester;
class Attendance extends Model
{
    protected $table = 'attendances';

    
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}
