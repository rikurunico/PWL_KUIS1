    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('layouts.head')
    </head>

    <body>
        @include('layouts.topbar')
        @include('layouts.navbar')

        @yield('content')
        

    @include('layouts.footer')
    </body>
    @include('javascript.js')
    </html>