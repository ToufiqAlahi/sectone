@extends('layouts.app')

@section('content')
    <div class="banner">
        @foreach ($images as $image)
                <div id={{'10'.$image->id}} class="banner_inner_div hide">
                    <img class="" src="{{asset('image/slider/'.$image->img)}}" alt="">
                </div>
        @endforeach 
    </div>  

    <div class="image-tiles">
        @foreach ($images as $image)
            <div class="tile">
                <img id = {{$image->id}} onclick = "showBanner({{$image->img}})" src="{{asset('image/slider/'.$image->img)}}" alt="">
            </div>  
        @endforeach  
    </div>



    <article>
        <div class="chairman">
            <img src="{{asset('image/propic.jpg')}}" alt="">
        </div>
        <div class="article-desc">
            <h2>Sylhet University Of Engineering and Technology</h2>
            <p>
                Lorem ipsum dolor Lorem ipsum dolor fdg  sit amet,  consectetur adipisicing elit. Quas debitis cumque libero voluptatibus vel, voluptas amet harum cum minus sit architecto eos qui modi, perspiciatis tempore unde. Voluptatibus porro similique vel placeat fuga debitis minus nulla soluta ipsum, illo repudiandae. Odit voluptatibus et dignissimos eum non facere aliquam tempore repellat eligendi quas sint quisquam praesentium ipsa doloremque accusamus laboriosam, consequatur fugiat. Recusandae, quidem fugit dicta debitis reiciendis dolore culpa nam deleniti nihil dolor facilis inventore labore mollitia voluptatibus, rem illum velit cumque excepturi minima alias numquam quibusdam ea? Laboriosam tenetur adipisci quos eligendi error voluptatem quae eum, incidunt, ipsum repellendus iure laborum. Fugit consectetur a explicabo deserunt ad ut reiciendis, ducimus dolor deleniti aperiam ipsam. Delectus iste ipsa id debitis. sit amet consectetur adipisicing elit. Maiores excepturi amet soluta placeat. Modi maxime tempore laborum nesciunt ut nobis reiciendis vel odit, eum recusandae obcaecati rem ratione sit ea corporis fugiat enim deserunt beatae ex exercitationem impedit! Voluptatibus iure esse amet laborum magni porro aliquid voluptas exercitationem! Ut, eius.
            </p>
        </div>
        <div class="notice">
            <h4>Notices</h4>
            <ul>
                <li>16 December, Independance Day</li>
                <li>16 December, Independance Day</li>
                <li>16 December, Independance Day</li>
                <li>16 December, Independance Day</li>
                <li>16 December, Independance Day</li>
            </ul>
        </div>
    </article>

    <div class="EventContainer">
        <h1>Recent Events</h1>
        <div class="EventCards">
            @foreach ($events as $event)
            <div class="EventCard">
                <div class="cardImage">
                    <img src="{{asset('image/event/'. $event->image)}}" alt="">
                </div>
                <div class="CardHeader">
                    <h3>{{$event->title}}</h3>
                </div>
                <div class="CardDescription">
                    <p>
                        {{$event->description}}
                    </p>
                </div>
                <div class="cardbtn">
                    <button>Read more</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <footer>
        <div class="copyRight">
            <h3>Design & Developed</h3>
        </div>
    </footer>

    {{-- **************************************/Starts JavaScript Code/************************************** --}}
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
{{-- **************************************/Ends JavaScript Code/************************************** --}}

@endsection