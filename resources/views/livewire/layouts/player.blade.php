<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YT Player</title>

{{-- Bootstrap Styles --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="/js/ytplayer.js"></script>

<!--

  <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
  <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
  <link href="/css/carousel.css" rel="stylesheet" />
  <link href="/css/cover.css" rel="stylesheet" />
  <link href="/css/dropdowns.css" rel="stylesheet" />
  <link href="/css/features.css" rel="stylesheet" />
  <link href="/css/footers.css" rel="stylesheet" />
  <link href="/css/headers.css" rel="stylesheet" />

  <link href="/css/aos-async.css" rel="stylesheet" />
-->

  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
      *{box-sizing:border-box;}
      html, body{padding:0;margin:0;overflow-x:hidden;}
            body {
                font-family: 'Nunito', sans-serif;
            }
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

    @livewireStyles
</head>
<body>
<div class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Modern Edge Mktg</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="{{ URL('/home') }}">Home</a>
        <a class="nav-link" href="{{ URL('/splash') }}">Splash</a>
        <a class="nav-link active" aria-current="page" href="{{ URL('/blog') }}">Blog</a>
        <a class="nav-link" href="{{ URL('/style') }}">Build</a>
        <a class="nav-link" href="{{ URL('/features') }}">Features</a>
        <a class="nav-link" href="{{ URL('/menus') }}">Menus</a>
        <a class="nav-link" href="{{ URL('/headers') }}">Headers</a>
        <a class="nav-link" href="{{ URL('/footers') }}">Footers</a>
        <a class="nav-link" href="{{ URL('/welcome') }}">Welcome</a>
        <a class="nav-link" href="{{ URL('/') }}">Checkout</a>
      </nav>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 btn btn-sm btn-outline-secondary text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-3 btn btn-sm btn-outline-secondary ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </div>
  </header>
</div>
</div>

    {{ $slot }}

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>



<!--
<script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
-->


    @stack('scripts')
    @livewireScripts

</body>
</html>