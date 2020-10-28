<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title'. 'Default') | BIBLIOWEB</title>
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    </head>
    <body>
            <section>
            @yield('content')
            </section>
                
    </body>
</html>