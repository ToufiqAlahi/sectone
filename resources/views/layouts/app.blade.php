

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUET</title>
    {{-- <link rel="stylesheet" href ="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/members.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/home_page.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}"  media="screen,projection"/>

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
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
            © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('materialize/js/JQuery.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/loader.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>












{{-- 
    
    <header>
        <nav>
            <div class="container nav-wrapper">
                <h5 class="navbar-logo">SUET</h5>
                <ul class="navbar">
                    <li class="navbar-item" onclick="goto('home')">Home </li>
                    <li class="navbar-item" onclick="goto('notice')">Notice</li>
                    <li class="navbar-item" onclick="goto('posts')">Blog </li>
                    <li class="navbar-item" onclick="goto('events')">Events</li>
                    <li class="navbar-item" id="drop_down" onclick="dropDownMenu()">More</li>
                </ul>
            </div>
        </nav>
    </header>

    <aside>
        <nav class="sidenav-list">
            <ul>
                <li onclick="goto('home')">Home</li>
                <li onclick="goto('pages/about')">About</li>
                <li onclick="goto('pages/posts')">Blog</li>
                <li onclick="goto('pages/contact_us')">Contact us</li>
                <li onclick="goto('pages/events')">Events</li>
                <li onclick="goto('pages/advisors')">Departments</li>
                <li onclick="goto('pages/sayor')">Admission</li>
                <li onclick="goto('pages/notice')">Notice</li>

                    @auth
                        @if (Auth::user()->hasRole('teacher'))
                            <li onclick="goto('teacher/home')"><a>Your Profile</a></li>
                        @endif

                        @if (Auth::user()->hasRole('student'))
                            <li onclick="goto('student/home')"><a>Your Profile</a></li>
                        @endif

                        @if (Auth::user()->hasRole('admin'))
                            <li onclick="goto('admin/dashboard')"><a>Dashboard</a></li>
                        @endif
                        <li onclick="logout('logout-form')"><a>Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li onclick="login_form()">Login</li>
                    @endauth

                    </ul>
                </nav>
            </aside>
            <div id = "drop_down_menu" class="hide">
                <nav class="sidenav-list">
                    <ul>
                        <li onclick="goto('pages/about')"><a>About</a></li>
                        <li onclick="goto('pages/contact_us')"><a>Contactn us</a></li>
                        <li onclick="goto('pages/members')"><a>Members</a></li>
                        <li onclick="goto('pages/advisors')"><a>Our Advisors</a></li>
        
                        @if (Route::has('login'))
                            @auth
                            @else
                                <li onclick="login_form()">Login</li>
                                
                            @endauth
                        @endif
        
                        @auth
                            <li onclick="goto('dashboard')"><a>Dashboard</a></li>
                            <li onclick="logout()"><a>Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
        
                       
        
                    </ul>
                </nav>
            </div>
        
        
            <div class="hide" id="login_form">
                <div class="container">
                    <div class="hide_form" onclick="login_form()">X</div>
                    <form class="form" action="{{route('login') }}" method = "POST">
                        @csrf
                        <div class="header">
                            <h3>Login to Your Account</h3>
                        </div>
                        <div class="error hide">
                            Email or password does not matched!
                        </div>
                        <div class="email_pass">
                            <div class="email">
                                <label for="">E-mail : </label>
                                <input type="email" id = "email" name="email" placeholder="Enter your email...." required>
                            </div>
                            <div class="password">
                                <label for="">Password : </label>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <button id="login_btn" type="submit">Login</button>
        
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        
            <div class="Content">
                @yield('content')
            </div>
    
    --}}