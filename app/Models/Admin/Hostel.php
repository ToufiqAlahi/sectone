<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\HostelMember;
class Hostel extends Model
{
    public function members(){
        return $this->hasMany(HostelMember::class);
    }
}
