@extends('layouts.teacher')

@section('content')
    <style>
        .review{
            padding-top: 10px;
            width: 300px;
            text-align: center;
            height: 100px;
            align-items: center;
            background: #7b0000c9;
            color: white;
            border-bottom: 1px solid rgb(9, 214, 170);
        }

    </style>
    <div class="last_attendance">
        <div class="attendanceTableWrapper"  id="attendanceTableWrapper">
            <div class="review" style="flex-direction:collumn;">
                <div>
                    <p>Dept. : {{$attendance[0]->department->name}}</p>
                    </div>
                    <div>
                        <p>{{$attendance[0]->semester->name}}</p>
                    </div>
                    <div>
                        <p>Course Code: {{$courses[0]->title}}</p>
                    </div>
                    <div>
                        <p>Date: 12/05/20</p>
                    </div>
            </div>
            
            <div class="attendanceTableBody" id="attendanceTableBody_view">
                @foreach ($attendance as $reg)
                    <div><button
                        @if ($reg->status == '0')
                            class="absent"
                        @endif
                         >{{substr($reg->student_id, 8, 2)}}</button></div>
                @endforeach
            </div>
            <div class="attendanceTableBody hide" id="attendanceTableBody_edit">
                @foreach ($attendance as $reg)
                    <div><button
                        @if ($reg->status == '0')
                            class="absent"
                        @endif
                         onclick="update_attendance(this, {{$reg}})">{{substr($reg->student_id, 8, 2)}}</button></div>
                @endforeach
            </div>
            <div><button onclick="edit_attendance(this)">View Mode</button></div>
        </div>
    </div>

    <script>
        let data = [];
        function update_attendance(e, d){
            fetch('http://127.0.0.1:8000/api/attendance/update', {
                method: "POST",
                body: JSON.stringify(d),
                headers: {
                    "Content-Type" : "application/json;charset = UTF-8"
                }
            }).then(res => res.json()).then(json=> {
                console.log(json)
                if(e.className == 'absent'){
                    e.classList.remove('absent');
                }
                else{
                    e.classList.add('absent');
                }
            });
        }

        function edit_attendance(e) {
            const div1 = document.getElementById('attendanceTableBody_view');
            const div2 = document.getElementById('attendanceTableBody_edit');
            
            if (div1.className == 'attendanceTableBody hide') {
                div1.classList.remove('hide')
                e.innerHTML = 'View Mode';
                div2.classList.add('hide')  
            }
            else{
                div1.classList.add('hide')
                div2.classList.remove('hide')
                e.innerHTML = 'Edit Mode';
            }
        }
    </script>
@endsection
