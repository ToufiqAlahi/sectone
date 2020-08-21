@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card w-75">
            <div class="card-header">
                <h2>Issue Details</h2>
            </div>
            <div class="card-body">
                <form action="{{route('library.book.issue.submit')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Student id</label>
                                <input type="number" class="form-control" name="student_id">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Book id</label>
                                <input type="number" class="form-control" name="book_id" value="{{$book->id}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Issue date</label>
                                <input type="date" class="form-control" name="issue_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Return date</label>
                                <input type="date" class="form-control" name="return_date">
                            </div>
                        </div>
                    <button class="btn btn-success ml-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection