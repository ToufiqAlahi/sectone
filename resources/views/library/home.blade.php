@extends('layouts.library')

@section('content')
    <style>
        .library .items{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .library .item{
            height: 100px;
            width: 200px;
            margin: 5px;
            border: none;
            box-shadow: 2px 2px 5px grey;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: green;
            color: #f5f9f9ad;
            cursor: pointer;
            text-align: center;
        }

        table{
            border-collapse: collapse;
            background: #922671;
            color: white;
            width: 85%;
            margin: 10px;
            padding: 10px;
        }

        td{
            padding: 10px;
        }
        thead{
            background: #0a4a69;
        }
        th{
            text-align: start;
            padding: 10px;
        }
        .col_1{
            width: 70px;
            padding: 5px;
            text-align: start;
        }
        tr{
            cursor: pointer;
        }
        tr:nth-child(even){
            background: #38343e6b;
        }
        td a{
            text-decoration: none;
            color: inherit;
        }
    </style>

    <div class="library">
        <div class="items">
            <div class="item">
                Books
            </div>
            <div class="item">
                Issued Books
            </div>
            <div class="item">
                Issue Book
            </div>
            <div class="item">
                Add New Book
            </div>
        </div>
        <hr>
        <table>
            <thead>
                <th class="col_1">ID</th>
                <th class="col_2">Book Name</th>
                <th class="col_3">Writer</th>
                <th class="col_4">Description</th>
                <th class="col_4">Category</th>
                <th class="col_4">Quantity</th>
                <th class="col_5">Available</th>
                <th class="col_5">Action</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                        <tr onclick="goto('library/home')">
                            <td class="col_1">{{$book->id}}</td>
                            <td class="col_2">{{$book->name}}</td>
                            <td class="col_3">{{$book->writer}}</td>
                            <td class="col_4">{{$book->description}}</td>
                            <td class="col_4">{{$book->category_id}}</td>
                            <td class="col_5">{{$book->quantity}}</td>
                            <td class="col_6">{{$book->available}}</td>
                            <td class="col_6"><a href="{{url('library/book/show', $book)}}">View</a></td>
                        </tr> 
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection