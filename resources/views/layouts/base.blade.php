<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield("page.title",config("app.name"))</title>
        <meta name="description" content="">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.header')
        <main class="flex-grow-1 py-3">@yield('content')</main>
        @include('includes.footer')
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js'></script>
        @stack('js')
        @stack('css')
    </body>
</html>