<html>
    <head>
        @section('head')
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script> const BASE_URL="{{url('/')}}/" </script>
        @show
    </head>
    <body>
        <nav>
            @yield('nav')
        </nav> 

        <header>
            @yield('header')
        </header>
        
        @yield('content')
        
    </body>
</html>