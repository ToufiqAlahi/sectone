@extends('layouts.admin')

@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="row">
                            <td class="col">Book id</td>
                            <td class="col">title</td>
                            <td class="col">Description</td>
                            <td class="col">action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="row">
                                <td class="col">{{$book->id}}</td>
                                <td class="col">{{$book->title}}</td>
                                <td class="col">{{$book->description}}</td>
                                <td class="col">
                                    <a href="{{url('library/book', $book)}}" class="btn btn-sm btn-success">Details</a>
                                    <a href="" class="btn btn-sm btn-info">Issue</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection