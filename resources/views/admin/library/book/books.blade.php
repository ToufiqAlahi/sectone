@extends('layouts.admin')

@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped w-75">
                    <thead>
                        <tr class="row bg-dark text-light">
                            <td class="col-1">Book id</td>
                            <td class="col-3">title</td>
                            <td class="col-6">Description</td>
                            <td class="col-2"><a href="{{route('library.book.create')}}" class="btn btn-sm btn-warning">Add new book</a></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="row">
                                <td class="col-1">{{$book->id}}</td>
                                <td class="col-3">{{$book->title}}</td>
                                <td class="col-6">{{$book->description}}</td>
                                <td class="col-2">
                                    <a href="{{route('library.book.show', $book)}}" class="btn btn-sm btn-success">Details</a>
                                    <a href="{{route('library.book.issue', $book)}}" class="btn btn-sm btn-info">Issue</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection