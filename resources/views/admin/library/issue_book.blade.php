@extends('layouts.admin')

@section('content')
<style>
    .form-header{
        padding: 15px;
    }
    .form-header::after{
        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        content: '';
        align-items: center;
        display: block;
        height: 2px;
        width: 200px;
        background: teal;
    }
</style>
    <div class="container">
        <div class="card">
            <div class="form-header center-align">
                <h5 class="teal-text">Issue Details</h5>
            </div>
            <form action="{{route('library.book.issue.submit')}}" method="post">
                @csrf
                @method('post')
                <div class="container">
                    <div class="row">
                        <div class="col m6">
                            <div class="input-field">
                                <input type="text" name="student_id" id="student_id">
                                <label class="teal-text" for="student_id">Student id</label>
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <input type="text" name="book_id" id="book_id">
                                <label class="teal-text" for="book_id">Book id</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6">
                            <div class="input-field">
                                <input type="text" id="Issue-date" name="issue_date" class="datepicker">
                                <label class="teal-text" for="issue-date">Issue Date</label>
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <input type="text" id="return-date" name="return_date" class="datepicker">
                                <label class="teal-text" for="return-date">Return Date</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-action center-align">
                    <button class="btn btn-small orange">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection