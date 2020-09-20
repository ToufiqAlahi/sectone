<div class="row">
    <div class="aside col hide-on-med-and-down l2">
        <div class="avatar" style="display: flex;">
            <div>
                <img src="{{asset('image/4331.jpeg')}}" alt="" class="responsive-img">
            </div>
            <div class="">
                <a href=""><h6 class="grey-text">{{ Auth::user()->name }}</h6></a>
                <span class="orange-text" onclick="logout('admin_logout_form')" style="cursor: pointer">Logout</span>
                <form id="admin_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <ul>
            <a href="{{URL::to('admin/dashboard')}}">
                <i class="material-icons prefix">dashboard</i> 
                <p style="margin-left: 20px;">Dashboard</p>
            </a> 
            <a href="{{URL::to('admin/library')}}">
                <i class="material-icons prefix">book</i> 
                <p style="margin-left: 20px;">Library</p>
            </a>
            <a href="{{URL::to('admin/hostel')}}">
                <i class="material-icons prefix">house</i> 
                <p style="margin-left: 20px;">Hostel</p>
            </a> 
            <a href="{{URL::to('admin/students')}}">
                <i class="material-icons">school</i> 
                <p style="margin-left: 20px;">Students</p>
            </a>   
        </ul>
    </div>
        
    <div class="col l10">
        <div class="">
            @yield('content')
        </div>
    </div>
</div>