@extends('layouts.app')

@section('content')
    <style>
        .principal{
            height: 200px;
            width: 200px;
            border: 5px solid yellowgreen;
            border-radius: 50%;
            overflow: hidden;
        }
        .carousel-item{
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
    <div class="container">
        <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">button</a>
            </div>

            @foreach ($images as $image)
                <div class="carousel-item" href="{{$image->id}}" style="background-image: url({{asset('image/slider/'.$image->img)}})">
                    <div class="carousel-content">
                        <h2>First Panel</h2>
                        <p class="white-text">This is your first panel</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row card-panel">
            <div class="col s12 m4">
              <div class="card principal">
                <img src="{{asset('image/propic.jpg')}}" alt="" class="responsive-img">
              </div>
            </div>
            <div class="col s12 m8">
                <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </p>
                <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </p>
            </div>
          </div>
    </div>

    <div class="container">
        <div class="row card">
            <h3 class="center card-title" style="padding-top: 40px;  !important">Recent events</h3>
            @foreach ($events as $event)
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="{{asset('image/event/'. $event->image)}}" alt="">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                        <p><a href="#" class="btn btn-small">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection






{{--
    **************************************/Starts JavaScript Code/**************************************
    <script>
        let banner_id = 101;
        function showBanner(id){
            let b_id = (100+parseInt(id)).toString();
            hideAll();
            const div = document.getElementById(b_id);
            div.classList.remove('hide'); 
            banner_id = parseInt(b_id);
            clearInterval(showBannerAuto);     
        }
    
        function hideAll(){
            let div = document.querySelector('.banner');
            for(let i =0; i<div.children.length; i++){
                div.children[i].classList.add('hide');
            }
        }
    
        function showBannerAuto(){
            hideAll();
            const div = document.getElementById(banner_id.toString());
            div.classList.remove('hide');
            if (banner_id==107) {
                banner_id = 101;
            }
            else banner_id++;        
        }
        setInterval(showBannerAuto, 3000);
    
        window.onload = function(){
            showBanner('01');
        }
        </script>
    **************************************/Ends JavaScript Code/**************************************
    
    
    
    
    --}}