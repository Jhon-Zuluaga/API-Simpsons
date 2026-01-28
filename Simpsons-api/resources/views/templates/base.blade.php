<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Springfield Edition</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> 
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        @include('templates/nav')

        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #87CEEB;">
            
            <div id="content">

                @include('templates/topbar')

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800" style="font-weight: 900; text-shadow: 2px 2px #FFD90F;">
                        @yield('header')
                    </h1>

                    @yield('content')
                </div>
                </div>
            @include('templates/footer')

        </div>
        </div>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>