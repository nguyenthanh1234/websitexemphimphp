<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website phim</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- @yield('css') -->
</head>
<body id = "{{$pageId}}" >
    <div class="container">
        @include('includes.header')
        <br>
        @yield('content')
        <br>
        <script src="{{ asset('js/app.js') }}"></script>
        @include('includes.footer')
</br>
        <!-- @yield('js') -->
</div>
</body>
</html>
