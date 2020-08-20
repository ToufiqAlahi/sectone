<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Book;

class Borrow extends Model
{
    protected $table = 'borrows';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
