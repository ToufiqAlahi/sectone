<!DOCTYPE html>
<html>
    <head>
        @include('layouts.includes.head')
    </head>
    <body>
        @include('layouts.teacher.header')
        <div class="row">
            
            <div class="aside col hide-on-med-and-down l2">
                @include('layouts.teacher.sidebar')
            </div>

            <div class="col l10">
                <div class="">
                    @yield('content')
                </div>
            </div>

        </div>

        @include('layouts.includes.bottom')
    </body>
</html>
