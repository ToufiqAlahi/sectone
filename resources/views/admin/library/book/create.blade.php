@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card bg-light w-75 text-dark h-auto">
            <div class="card-header text-dark text-center">
                <h3>Add new Book</h3>
            </div>
            <div class="card-body text-dark">
                
                <form action="{{route('library.book.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="title">Athor</label>
                            <input type="text" class="form-control" name="author">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control" id="">
                            <option value="Computer Science" selected>Computer Science</option>
                            <option value="Computer Science">E</option>
                            <option value="Computer Science">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea name="description" id="" cols="30" rows="6" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="quantity">
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Available</label>
                                <input type="number" class="form-control" name="available">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Rack No.</label>
                                <input type="number" class="form-control" name="rack">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Row No.</label>
                                <input type="number" class="form-control" name="row">
                            </div>
                        </div>
    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Column No.</label>
                                <input type="number" class="form-control" name="col">
                            </div>
                        </div>
                            <button class="btn btn-success ml-3">Save</button>
                            
                        </div>
                        
                    </div>
                </form>
    
            </div>
        </div>
    </div>
@endsection