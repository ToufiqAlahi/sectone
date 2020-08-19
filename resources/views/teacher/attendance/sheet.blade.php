@extends('layouts.teacher')
@section('content')
<style>
    .course_id{
        background: #b53872;
        height: 50px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        border-bottom: 1px solid greenyellow;
    }
    .attendanceTableBody{
        padding: 10px;
    }
</style>

    <div class="attendanceTableWrapper" id="attendanceTableWrapper">
        <div class="title"><h3>Press on the Rule number if absent</h3></div>
        <div class="course_id">
            <label for="">Select Course : </label>
            <select id="course_id">
                @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->code}}</option>
                @endforeach
            </select>
        </div>
        <div class="attendanceTableBody">
            @foreach ($registration as $reg)
                <div><button onclick="absent(this, {{$reg}})">{{substr($reg, 8, 2)}}</button></div>
            @endforeach
        </div>
        <div><button onclick="submit()">Submit</button></div>
    </div>

    <script>
        let date = new Date();
        let absents = [];
        function absent(e, d){
            absents.push(d);
            e.classList.add('absent');
        }

        function submit(){
            let attendance = {
                course_id: document.getElementById('course_id').value,
                rules: absents
            }

            console.log(attendance)
            fetch('http://127.0.0.1:8000/api/attendance/store', {
                method: "POST",
                body: JSON.stringify(attendance),
                headers: {
                    "Content-Type" : "application/json;charset = UTF-8"
                }
            }).then(res => res.json()).then(json=> {
                console.log(json)
                goto('teacher/attendance/home');
            });
        }
    </script>
@endsection