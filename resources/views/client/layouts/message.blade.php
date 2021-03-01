<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.80.0">
        <title>Brand</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('client/assets/js/app.js') }}" defer></script>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

        <!-- Popup -->
        <script src="{{ asset('client/js/popup.js') }}"></script> 

        <!-- Box -->
        <script src="{{ asset('client/js/box.js') }}"></script> 

        <!-- Dialog -->
        <script src="{{ asset('client/js/dialog.js') }}"></script> 

        <!-- DataList -->
        <link href="{{ asset('client/css/datalist.css') }}" rel="stylesheet">
        <script src="{{ asset('client/js/datalist.js') }}"></script> 

        <link href="{{ asset('client/css/main.css') }}" rel="stylesheet">
        <script src="{{ asset('client/js/main.js') }}"></script> 
        
        <link href="{{ asset('client/css/message.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
    </body>
</html>