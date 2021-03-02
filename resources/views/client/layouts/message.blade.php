<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.80.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Brand</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('client/assets/js/app.js') }}" defer></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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

        <!-- Feather icon -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

        <script>
            function ready(method) {
              window.addEventListener("DOMContentLoaded", function(){
                method();
              });
      
              initJs();
            };
            
            ready(function() {
              $('.logout').on('mouseup', function(e) { $(this).closest('form').submit(); });
            });
          </script>
    </body>
</html>