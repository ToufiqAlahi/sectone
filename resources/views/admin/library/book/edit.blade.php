@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card bg-light w-75 text-dark h-auto">
            <div class="card-header text-dark text-center">
                <h3>Edit The Book</h3>
            </div>
            <div class="card-body text-dark">
                
                <form action="{{route('library.book.update', $book)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{$book->title}}" name="title">
                    </div>
                    <div class="form-group">
                        <label for="title">Athor</label>
                        <input type="text" class="form-control" value="{{$book->author}}" name="author">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea name="description" id="" cols="30" rows="6" class="form-control">{{$book->description}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="{{$book->total_quantity}}">
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Available</label>
                                <input type="number" class="form-control" name="available" value="{{$book->available}}">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Rack No.</label>
                                <input type="number" class="form-control" name="rack" value="{{$book->rack}}">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Row No.</label>
                                <input type="number" class="form-control" name="row" value="{{$book->row}}">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Column No.</label>
                                <input type="number" class="form-control" name="col" value="{{$book->col}}">
                            </div>
                        </div>
                            <button class="btn btn-success ml-3">Update</button>
                            
                        </div>
                        
                    </div>
                </form>
    
            </div>
        </div>
    </div>
@endsection