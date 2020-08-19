@extends('layouts.admin')
@section('content')
    <style>
        
.hostel_member{
    margin: auto;
    height: auto;
    padding: 10px;
    width: 90%;
    background: #114665ad;
    color: white;
    display: flex;
    flex-direction: column;

}
.hostel_member>div{
    display: flex;
}
.hostel_member .image{
    height: 150px;
    width: 150px;
    border-radius: 3px;
    overflow: hidden;
}
.hostel_member  .academic div{
    height: 40px;
    width: 500px;
    display: flex;
    align-items: center;
}
.hostel_member  .personal_info{
    width: 350px;
}
.hostel_member  .academic div .title,
.hostel_member  .personal_info div .title,
.hostel_member  .address div .title{
    width: 120px;
}
.hostel_member  .academic div .info{
    width: 300px;
}
.hostel_member .academic{
    margin-left: 40px;
}
.hostel_member .name{
    height: 40px;
    padding: 10px;
    display: flex;
    justify-content: center;
    font-weight: 600;
    font-size: 20px;
}

.editBtn{
    margin-top: 5px;
    height: 30px;
}
.editBtn a{
    padding: 5px 40px;
    background: #c0d3dc;
    color:black;
    border: none;
    outline: none;
    cursor: pointer;
    text-decoration: none;
}

    </style>
    <div class="header">
        <h1 id="dash-title">Hostel Member</h1>
    </div>
    <div class="hostel_member">
        <div class="name"> <h3>{{$member->student->user->name}}</h3> </div>
        <hr>
        <div class="second">
            <div class="img">
                <div class="image">
                    <img src="{{asset('image/student/'.$member->student->image)}}" alt="">
                </div>
            </div>
            <div class="academic">
                <div>
                    <div class="title">Registration</div> <div class="info">: {{$member->student->id}}</div>
                </div>
                <div>
                    <div class="title">Department</div> <div class="info">: {{$member->student->department->name}}</div>
                </div>
                <div>
                    <div class="title">Semester</div> <div class="info">: {{$member->student->semester->name}}</div>
                </div>
                <div>
                    <div class="title">Session</div> <div class="info">: {{$member->student->session}}</div>
                </div>
            </div>
        </div>
        <hr>
        <style>
            .hostel_details{
                display: flex;
                width: 100%;
            }
            .hostel_details .collumn{
                height: auto;
                width: 50%;
                display: flex;
                flex-direction: column;
                margin: 20px 0;
            }
            .collumn .row{
                display: flex;
                align-items: center;
                height: 35px;
            }
            .collumn .row .col_1{
                width: 130px;
            }
            .collumn .row .col_2{
                width: 10px;
            }
            .collumn .row .col_3{
                width: auto;
            }
        </style>
        <div class="hostel_details">
            <div class="collumn">
                <h3>Admission Details</h3>
                <div class="row">
                    <div class="col_1">Hostel Name</div><div class="col_2">:</div> <div class="col_3">{{$member->hostel->name}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Room Number </div> <div class="col_2">:</div> <div class="col_3">{{$member->room_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Sit Number </div> <div class="col_2">:</div> <div class="col_3"> {{$member->sit_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Semester </div> <div class="col_2">:</div> <div class="col_3"> {{$member->admission_semester}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Date </div> <div class="col_2">:</div> <div class="col_3"> {{$member->admission_date}}</div>
                </div>
            </div>
            <div class="collumn">
                <div class="row">
                    <div class="col_1">Hostel Name</div><div class="col_2">:</div> <div class="col_3">{{$member->hostel->name}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Room Number </div> <div class="col_2">:</div> <div class="col_3">{{$member->room_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Sit Number </div> <div class="col_2">:</div> <div class="col_3"> {{$member->sit_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Payment Status </div> <div class="col_2">:</div> <div class="col_3"> Due</div>
                </div>
            </div>
        </div>
        <div class="hostel_details">
            <div class="collumn">
                <h3>Payment Details</h3>
                <div class="row">
                    <div class="col_1">Hostel Name</div><div class="col_2">:</div> <div class="col_3">{{$member->hostel->name}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Room Number </div> <div class="col_2">:</div> <div class="col_3">{{$member->room_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Sit Number </div> <div class="col_2">:</div> <div class="col_3"> {{$member->sit_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Admission Date </div> <div class="col_2">:</div> <div class="col_3"> {{$member->admission_date}}</div>
                </div>
            </div>
            <div class="collumn">
                <div class="row">
                    <div class="col_1">Hostel Name</div><div class="col_2">:</div> <div class="col_3">{{$member->hostel->name}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Room Number </div> <div class="col_2">:</div> <div class="col_3">{{$member->room_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Sit Number </div> <div class="col_2">:</div> <div class="col_3"> {{$member->sit_no}}</div>
                </div>
                <div class="row">
                    <div class="col_1">Payment Status </div> <div class="col_2">:</div> <div class="col_3"> Due</div>
                </div>
            </div>
        </div>
        <hr>
    <div class="editBtn"><a href="{{url('admin/member/edit/',$member)}}">Edit</a></div>
@endsection
