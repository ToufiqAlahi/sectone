<?php

namespace App\Models;
use App\User;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Semester;
use App\Models\HostelMember;
use App\Models\Course;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function hostel_member(){
        return $this->hasOne(HostelMember::class);
    }

    public function library_member(){
        return $this->hasOne(Member::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
