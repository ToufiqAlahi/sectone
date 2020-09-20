

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUET</title>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}"  media="screen,projection"/>
</head>

<body>
{{------------- SITE HEADER -------------}}
    <header>

        {{-- Navigation bar --}}
        <nav class="teal">
            <div class="nav-wrapper ">
              <a href="#!" class="brand-logo">Logo</a>
              <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="">Home</a></li>
                <li><a href="">Notice</a></li>
                <li><a href="">Departments</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Events</a></li>
                @auth
                    @if (Auth::user()->hasRole('teacher'))
                        <li><a href="{{url('teacher/home')}}" class="floating-button">
                            <i class="material-icons">dashboard</i>
                        </a></li>
                    @endif

                    @if (Auth::user()->hasRole('student'))
                        <li><a href="{{url('student/home')}}">Your Profile</a></li>
                    @endif

                    @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    @endif
                @endauth
              </ul>
            </div>
          </nav>
        
          <ul class="sidenav" id="mobile-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Notice</a></li>
                <li><a href="">Departments</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Events</a></li>
          </ul>
    </header>

    
    <div>
        @yield('content')
    </div>


    <footer class="page-footer teal">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta consequatur alias recusandae, assumenda corporis expedita, nam minima commodi laboriosam accusantium necessitatibus ut odit vel quas ex voluptatem temporibus officia!</p>
                
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
                @auth
                    <li >
                        <form id="logout-form" action="{{route('logout') }}" method="POST">
                            @csrf
                            <button class="btn orange darken-2 white-text">Logout</button>
                        </form>
                    </li>
                @else
                    <a class="waves-effect waves-light btn modal-trigger" data-target="login-modal">Login</a>
                @endauth
            </ul>
            </div>

            <div id="login-modal" class="modal" style="max-width: 400px;">
                <div class="modal-content">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="input-field">
                            <input type="email" id="email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password">
                            <label for="password">Password</label>
                        </div>
                        <button class="btn">Login</button>
                        <a href="">Forgot password?</a>
                    </form>
                </div>
              </div>

        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
            © 2020 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">Facebook</a>
        </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('materialize/js/JQuery.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/loader.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>

<style>
    .nav-wrapper{
        padding-left: 40px;
        padding-right: 40px;
    }
    body{
        background: rgb(208, 228, 230);
        font-family: 'Karla', sans-serif;
    }
</style>