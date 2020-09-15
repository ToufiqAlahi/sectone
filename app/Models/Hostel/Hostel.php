<?php

namespace App\Models\Hostel;
use App\Models\Hostel\Member;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    public function members(){
        return $this->hasMany(Member::class);
    }
}
