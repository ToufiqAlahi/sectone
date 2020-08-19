<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Role;
use App\Models\Member;
use App\Models\Advisor;
use App\Models\Student;
use App\Models\Teacher;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function member(){
        return $this->hasOne(Member::class);
    }

    public function teacher(){
        return $this->hasOne(Teacher::class);
    }

    public function student(){
        return $this->hasOne(Student::class);
    }


    public function roles(){
        return $this->belongsToMany(Role::class);
    }



    public function hasAnyRole($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        else return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        else return false;
    }
}
