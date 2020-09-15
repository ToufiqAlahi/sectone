<?php

namespace App\Models\Hostel;

use Illuminate\Database\Eloquent\Model;
use App\Hostel\Hostel;
class Member extends Model
{
    protected $table = 'hostel_members';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function hostel(){
        return $this->belongsTo(Hostel::class);
    } 
}
