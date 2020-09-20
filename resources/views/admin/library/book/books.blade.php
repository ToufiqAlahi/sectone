@extends('layouts.admin.admin')

@section('content')
    

<div class="row center-align" style="display: flex; flex-wrap: wrap;">
    <div class="col s6 m3">
        <div class="card-panel">
            <h6 class="card-title">Employee</h6>
            <p>4</p>
        </div>
    </div>
    <div class="col s6 m3">
        <div class="card-panel">
            <h6>Total Books</h6>
            <p>500</p>
        </div>
    </div>
    <div class="col s6 m3">
        <div class="card-panel">
            <h6>Available Books</h6>
            <p>445</p>
        </div>
    </div>
    <div class="col s6 m3">
        <div class="card-panel">
            <h6>Issued Books</h6>
            <p>45</p>
        </div>
    </div>
</div>
    <div class="row center-align">
            
        <div class="container col l7">
            <div class="card">
                <div class="container">
                    <div class="table-heading">
                        <h5 class="center-align teal-text">
                            Books Available in our library.
                        </h5>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td class="id">Book id</td>
                                <td class="title">title</td>
                                <td class="action">Action</td>
                            </tr>
                        </thead>
                    </table>
                    <div class="data-wrapper">
                        <table class="table striped">
                            @foreach ($books as $book)
                                <tr>
                                    <td class="id">{{$book->id}}</td>
                                    <td class="title">{{$book->title}}</td>
                                    <td class="action">
                                        <a href="{{route('library.book.show', $book)}}">Details</a>
                                        <a href="{{route('library.book.issue', $book)}}">Issue</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-action center-align">
                        <a href="{{route('library.book.create')}}">Add Book</a>
                    </div>
                </div>
            </div>
        </div>

            <div class="card col l3  return-book offset-l1">
                <p class="card-title cyan-text text-darken-4">Take a book return</p>
                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" id="book_id" name="book_id">
                        <label for="book_id">Book id</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="student_id" name="student_id">
                        <label for="student_id">Student id</label>
                    </div>
                    <div class="center-align">
                        <a href="" class="btn btn-small cyan">Save</a>
                    </div>
                </form>
            </div>
    </div>
@endsection

<style>
    .data-wrapper{
        width: auto;
        height: 60vh;
        overflow: auto;
    }
    .table-heading{
        border-bottom: 2px teal solid;
        padding: 20px;
    }
    .id{
        width: 20%;
    }
    .title{
        width: 50%;
    }
    .action{
        width: 30%;
    }

    .return-book{
        padding: 15px !important;
    }
</style>