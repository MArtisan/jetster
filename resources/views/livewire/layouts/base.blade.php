<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jetster Blog</title>

{{-- Bootstrap Styles --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="/css/blog.css" rel="stylesheet" />
  <link href="/css/aos.css" rel="stylesheet" />

<!--
  <link href="/css/carousel.css" rel="stylesheet" />
  <link href="/css/cover.css" rel="stylesheet" />
  <link href="/css/dropdowns.css" rel="stylesheet" />
  <link href="/css/features.css" rel="stylesheet" />
  <link href="/css/footers.css" rel="stylesheet" />
  <link href="/css/headers.css" rel="stylesheet" />

  <link href="/css/aos-async.css" rel="stylesheet" />
  <link href="/js/ytplayer.js" rel="stylesheet" />
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

<div data-aos="fade-down-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Modern Edge Mktg</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">

        <a class="nav-link active" aria-current="page" href="{{ URL('/blog') }}">Blog</a>

        <a class="nav-link" href="{{ URL('/') }}">Home</a>
        <a class="nav-link" href="{{ URL('/video') }}">Video</a>
        <a class="nav-link" href="{{ URL('/player') }}">Player</a>

      </nav>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
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
</div>

    {{ $slot }}

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script src="/js/aos.js"></script>
    <script src="/js/main.js"></script>

<!--

-->


    @stack('scripts')
    @livewireScripts

</body>
</html>