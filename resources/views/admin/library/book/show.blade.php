@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>{{$book->title}}</h3>
                <p>{{$book->description}}</p>
                <p>{{$book->author}}</p>
            </div>
        </div>
        <a href="{{route('library.book.edit', $book)}}" class="btn btn-success">Edit</a>
    </div>
@endsection