
@extends('layouts.admin.admin')

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
                <h3 class="teal-text">Edit Book</h3>
            </div>
            <div class="container">
                <form action="{{route('library.book.update', $book)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col m6">
                            <input type="text" id="title" name="title" value="{{$book->title}}">
                            <label for="title">Title</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="text" class="form-control" name="author" id="author" value="{{$book->author}}">
                            <label for="author">Athor</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6">
                            <div class="input-field">
                                <select name="type" class="form-control" id="type">
                                    <option value="Computer Science" selected>Computer Science</option>
                                    <option value="Computer Science">Electrical & Electronics</option>
                                    <option value="Computer Science">Civil & Architecture</option>
                                    <option value="Computer Science">Others</option>
                                </select>
                                <label for="type">Type</label>
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity" value="{{$book->total_quantity}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <textarea name="description" id="description" class="materialize-textarea">
                                {{$book->description}}
                            </textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m3">
                            <div class="input-field">
                                <input type="number" class="form-control" id="available" name="available" value="{{$book->available}}">
                                <label for="available">Available</label>
                            </div>
                        </div>
    
                        <div class="col m3">
                            <div class="input-field">
                                <input type="number" class="form-control" id="rack" name="rack" value="{{$book->rack}}">
                                <label for="rack">Rack No.</label>
                            </div>
                        </div>
    
                        <div class="col m3">
                            <div class="input-field">
                                <input type="number" class="form-control" id="row" name="row" value="{{$book->row}}">
                                <label for="row">Row No.</label>
                            </div>
                        </div>
    
                        <div class="col m3">
                            <div class="input-field">
                                <input type="number" class="form-control" id="column" name="col" value="{{$book->col}}">
                                <label for="column">Column No.</label>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    <div class="card-action center-align">
                        <button class="btn orange">Update</button>

                    </div>
                </form>
    
            </div>
        </div>
    </div>
@endsection



