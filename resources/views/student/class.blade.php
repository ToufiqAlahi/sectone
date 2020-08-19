@extends('layouts.student')

@section('content')
<style>
    .courses_list{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    .courses_list .course{
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
    }
</style>
    <div class="courses_list">
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
        <div class="course">
            <h4>CSE 601</h4>
            <p>Software Engineering</p>
        </div>
    </div>

@endsection