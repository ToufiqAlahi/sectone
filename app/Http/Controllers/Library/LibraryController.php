<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Library\Book;
use App\Models\Library\IssueBook as Issue;
use App\Models\Student;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function issueBook(Book $book){
        return view('admin.library.issue_book', compact('book'));
    }

    public function submitIssue(Request $request){
        $issue = new Issue;
        $issue->student_id = $request->student_id;
        $issue->book_id = $request->book_id;
        $issue->issue_date = $request->issue_date;
        $issue->return_date = $request->return_date;
        $issue->save();

        return redirect()->route('library.book.index');
    }
}
