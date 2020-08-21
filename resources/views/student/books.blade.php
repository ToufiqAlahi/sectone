@extends('layouts.student')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10">
                <div class="card w-100">
                    
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h4>Borrowed Books</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr class="row">
                                    <td class="col">Book Id</td>
                                    <td class="col-3">Title</td>
                                    <td class="col">Author</td>
                                    <td class="col">Issue Date</td>
                                    <td class="col">Return Date</td>
                                    <td class="col">status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->student->books as $book)
                                    <tr class="row">
                                        <td class="col">{{$book->id}}</td>
                                        <td class="col-3">{{$book->book_title}}</td>
                                        <td class="col">{{$book->book->author}}</td>
                                        <td class="col">{{$book->issue_date}}</td>
                                        <td class="col">{{$book->return_date}}</td>
                                        <td class="col">{{$book->status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection