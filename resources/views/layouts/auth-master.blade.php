<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ModernArtisan">
    <meta name="generator" content="Artscript 1.8.0">
    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL('assets/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles <link href="signin.css" rel="stylesheet"> <link href="{{ URL('css/signin.css') }}" rel="stylesheet"> -->
    
</head>
<body class="text-center">

@include('layouts.partials.navbar')

    <main class="form-signin">

        @yield('content')

    </main>


</body>
</html>
