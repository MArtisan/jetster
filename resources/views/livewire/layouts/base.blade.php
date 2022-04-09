<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jetster Blog</title>

{{-- Bootstrap Styles --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="/css/blog.css" rel="stylesheet" />

<!--
  <link href="/css/carousel.css" rel="stylesheet" />
  <link href="/css/cover.css" rel="stylesheet" />
  <link href="/css/dropdowns.css" rel="stylesheet" />
  <link href="/css/features.css" rel="stylesheet" />
  <link href="/css/footers.css" rel="stylesheet" />
  <link href="/css/headers.css" rel="stylesheet" />

  <link href="/css/aos-async.css" rel="stylesheet" />
  <link href="/css/aos.css" rel="stylesheet" />
-->

  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

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

    @livewireStyles
</head>
<body class="bg-light">

    {{ $slot }}

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


<!--
    <script src="/js/aos.js"></script>
    <script src="/js/main.js"></script>
-->


    @stack('scripts')
    @livewireScripts

</body>
</html>