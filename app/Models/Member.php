<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Member extends Model
{
    protected $table = 'library_members';

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
