<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Akademik</title>
  
  <link href="{{ asset('../bootstrap-3.3.6/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
    @include('navbar')    
    @yield('main')
    </div>
    @yield('footer')    
    <script src="{{ asset('../js/jquery-2.2.1.min.js') }}"> </script>
  <script src="{{ asset('../bootstrap-3.3.6/js/bootstrap.min.js') }}"></script>
</body>
</html>