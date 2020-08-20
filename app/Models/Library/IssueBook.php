<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Library\Book;


class IssueBook extends Model
{
    protected $table ='issued_books';

    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
