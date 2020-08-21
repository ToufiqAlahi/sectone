<?php
namespace App\Traits;

use App\User;

trait UserInfo
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute(){
        return $this->user->name;
    }

    public function getEmailAttribute(){
        return $this->user->email;
    }
}
