<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title> LMS - @yield('title')  </title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
       
        {{-- Main Container start --}}
        
            @hasSection('main-content')
                @yield('main-content')
            @else
            <h4> Content not found</h4>
            @endif
        
        {{-- Main Container ended --}}
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{url('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{url('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('assets/js/main.js')}}"></script>
</body>
</html>