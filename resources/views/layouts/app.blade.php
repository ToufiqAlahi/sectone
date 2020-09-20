

<!DOCTYPE html>
<html>
    <head>
        @include('layouts.includes.head')
        <style>
            
        </style>
    </head>
    <body>
        @include('layouts.website.header')
        
        <div>
            @yield('content')
        </div>

        @include('layouts.website.footer')
        @include('layouts.includes.bottom')
    </body>
</html>

