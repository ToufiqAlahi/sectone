<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Hostel\Hostel;
class HostelMember extends Model
{
    protected $table = 'hostel_members';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function hostel(){
        return $this->belongsTo(Hostel::class);
    }
}
