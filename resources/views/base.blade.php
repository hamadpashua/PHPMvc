{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
    <!-- Custom styles for this template -->
    {{-- <link href="{{ url('css/starter-template.css') }}" rel="stylesheet" type="text/css"> --}}
    {{-- <link rel="icon" href="{{ asset('favicon/policelogo-1-150x150.jpg') }}">
    <meta name="description" content="">
    <meta name="author" content="Hamad Pashua, Sailor Entertainment, Company">
    <meta name="generator" content="Sailor Framework 0.00.1">
    <meta name="theme-color" content="#7952b3">
    <title>@yield('title')</title>
</head>
<body>
    
    @include('includes.navbar')

    <div class="container my-4">
        @include('includes.messages')
        @yield('content')
    </div>

    <div class="container mt-5">
        @include('includes.footer')
    </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')
    
</body>
</html>