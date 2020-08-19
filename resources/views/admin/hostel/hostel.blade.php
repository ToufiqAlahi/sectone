@extends('layouts.admin')
@section('content')
    <style>
        .hostels .menu{
            height: 50px;
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        .hostels .menu li{
            margin: 5px;
            background: #009688;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .hostel_details{
            width: 100%;
            background: #a5b5a6d4;
            display: flex;
            flex-direction: column;

        }
        .hostel_details .row{
            height: 25px;
            display: flex;
        }
        .hostel_details .col_1{
            width: 150px;
        }
        .hostel_details .col_2{
            width: 20px;
        }
        .hostel_details .col_3{
            width: auto;
        }
    </style>
    <div class="hostels">
        <div class="hostel_header">
                <div class="menu">
                    <li>Muktijudda Hall</li>
                    <li>Shadhinata Hall</li>
                    <li>Bangamata Hall</li>
                </div>
                <hr>
        </div>
        <div class="hostel_details">
            <div class="collumn">
                <div class="row">
                    <div class="col_1">Total Rooms </div> <div class="col_2">:</div> <div class="co_3"> 38</div>
                </div>
                <div class="row">
                    <div class="col_1">Total Sits </div> <div class="col_2">:</div> <div class="co_3">  152</div>
                </div>
                <div class="row">
                    <div class="col_1">Total Student </div> <div class="col_2">:</div> <div class="co_3">  145</div>
                </div>
                <div class="row">
                    <div class="col_1">Empty Sits </div> <div class="col_2">:</div> <div class="co_3">  7</div>
                </div>
                <div class="row">
                    <div class="col_1">Guest Room </div> <div class="col_2">:</div> <div class="co_3">  1</div>
                </div>
                <div class="row">
                    <div class="col_1">Guest Room Students </div> <div class="col_2">:</div> <div class="co_3">  16</div>
                </div>
            </div>
        </div>
        <div class="rooms">
            <style>
                table{
                    border-collapse: collapse;
                }
                .col_1{
                    width: 100px;
                }
                .col_2{
                    width: 200px;
                }
                .col_3{
                    width: 70px;
                }
                .col_4{
                    width: 100px;
                }
                .col_5{
                    width: 100px;
                }

                .col_2 li{
                    display: flex;
                    align-items: center;
                    justify-content: space-around;
                    margin-top: 5px;
                    border: 1px solid grey;
                    cursor: pointer;
                }
                tr{
                    border: 1px solid grey;
                }
                td{
                    border: 1px solid grey;
                    padding: 10px;
                }
                .search_box{
                    display: flex;
                    align-items: center;
                    height: 50px;
                }
                .search_box input{
                    padding: 4px 5px;
                    margin-right:3px; 
                }
            </style>
            <div class="search_box">
                <input class="col_1" type="text" placeholder="Room No." id="room_number" onkeyup="searchByRoomNumber()">
                <input class="col_2" type="text" placeholder="Enter name" id="student_name" onkeyup="searchByName()">
                <input class="col_2" type="text" placeholder="Registration" id="registration" onkeyup="searchByRegistration()">
                <input class="col_5" type="submit" value="Search">
            </div>
            <table class="tableData">
                <thead>
                    <th class="col_1">Room No. </th>
                    <th class="col_2">Student's Name</th>
                    <th class="col_3">Registration</th>
                    <th class="col_4">Department</th>
                    <th class="col_5">Action</th>
                </thead>
                <tbody id="tableData">
                    @foreach ($members as $member)
                        <tr>
                            <td class="col_1">{{$member->room_no}}</td>
                            <td class="col_2">{{$member->student->user->name}}</td>
                            <td class="col_3">{{$member->student_id}}</td>
                            <td class="col_4">{{$member->student->department->short_form}}</td>
                            <td class="col_5"><a href="{{url('admin/hostel/member', $member)}}"><button>Details</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>

        function searchByRoomNumber(){
            let filter = document.getElementById('room_number').value;
            let table = document.getElementById('tableData');

            let tr = table.getElementsByTagName('tr');

            for(var i=0; i<tr.length; i++){
                let td = tr[i].getElementsByTagName('td')[0];

                if(td){
                    let data = td.innerHTML || td.textContent;

                    if(data.indexOf(filter)>-1){
                        tr[i].style.display = '';
                    }
                    else 
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }

        function searchByRegistration(){
            let filter = document.getElementById('registration').value;
            let table = document.getElementById('tableData');

            let tr = table.getElementsByTagName('tr');

            for(var i=0; i<tr.length; i++){
                let td = tr[i].getElementsByTagName('td')[2];

                if(td){
                    let data = td.innerHTML || td.textContent;

                    if(data.indexOf(filter)>-1){
                        tr[i].style.display = '';
                    }
                    else 
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }
    </script>
@endsection