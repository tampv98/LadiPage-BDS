<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LadiPage - Bất động sản</title>
    <base href="{{ asset('') }}">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

   <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.carousel.min.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  
</head>
<body>
  @include('header')
  @yield('content')
  @include('footer')
</body>
 
 <script src="{{ asset('library/jquery/jquery-3.4.1.min.js') }}"></script>
 <script src="{{ asset('library/bootstrap/js/bootstrap.min.js') }}"></script>     
 <script src="{{ asset('library/OwlCarousel2/owl.carousel.min.js') }}"></script>  
 <script src="{{ asset('js/js-style.js') }}"></script>  
</html>