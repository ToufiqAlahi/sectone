@extends('layouts.admin');

@section('content')
<style>
    .slider_settings{
        margin-top: 20px;
    }
    .slider_images{
        width: 100%;
        height: 130px;
        display: flex;
    }
    .slider_images>div{
        height: 100%;
        width: 150px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px;
        overflow: hidden;
    }
</style>
    <div class="slider_settings">
        <h3>Slider Images</h3>
        <div class="slider_images">
            @foreach ($slider_images as $image)
                <div onclick = "print({{$image->image}})">
                    <img src="{{asset('image/Hijab/'.$image->image. '.jpeg')}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function print(d){
            console.log(d);
        }
    </script>
@endsection