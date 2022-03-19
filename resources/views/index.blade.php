    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('layouts.head')
    </head>

    <body>
        @include('layouts.topbar')
        @include('layouts.navbar')

        @yield('content')
        
    <main id="main">

        

    </main><!-- End #main -->

    @include('layouts.footer')
    </body>
    @include('javascript.js')
    </html>