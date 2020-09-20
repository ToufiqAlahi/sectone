



@extends('layouts.teacher')

@section('content')
    <a class="btn orange btn-small" onclick="test()">
        Take new attendance
    </a>

    
    <div class="sheet-wrapper">
        <div class="card attendance-sheet col s11 m4 l4">
            
            


            
        </div>
    </div>

    <script>
        function test() {
            console.log();
            let div = document.querySelector('.attendance-sheet');

            let html = `
                <div class="card-title center-align">
                    {{$course->title}}
                </div>
                <input id ="course_id" value = "{{$course->id}}" style="display: none;">
                <div class="test">
                    @foreach($rules as $rule)
                        <div onclick="absent(this, {{$rule}})">
                            <p>{{substr($rule, 8, 2)}}</p>
                        </div>
                    @endforeach
                </div>
                <div class = "card-action center-align">
                    <a class = "btn btn-small" onclick="submit()"> Save</a>
                    <a class = "btn btn-small red" onclick="cancel()"> Cancel</a>
                </div>
            `

            div.innerHTML = html;
        }


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

        function cancel() {
            let div = document.querySelector('.attendance-sheet');
            div.innerHTML = '';
        }
    </script>
@endsection

<style>

    .attendance-sheet .card-title{
        padding: 20px 0;
        border-bottom: 2px teal solid;
    }

    .test{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .test>div{
        display: flex;
        margin: 4px;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background: rgb(239, 242, 243);
        cursor: pointer;
    }
    .test>div>p{
        color: rgb(8, 2, 29);
        margin: auto;
        
    }
    .absent{
        background: rgb(235, 112, 112) !important;
        color: rgb(9, 10, 10);
    }
</style>


