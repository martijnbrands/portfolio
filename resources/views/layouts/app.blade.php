<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PWA Manifest -->
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Standenmotor">
    <meta name="apple-mobile-web-app-title" content="Standenmotor">
    <meta name="theme-color" content="#245dab">
    <meta name="msapplication-navbutton-color" content="#5990dc">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-starturl" content="/">

    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Martijn Brands')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0dstlcjcz6casqp72rsmk70vibg4q3mfo22hh0vuxqglfcr6"></script>
    <script>
      tinymce.init({
        selector: '#description',
        plugins: "link",
        toolbar: 'insert | undo redo | link | formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
      });
    </script>

</head>
<body>
    <div id="app">
        @auth
            @include('includes.navigation')
        @endauth

        <header>
            @if (Request::path() == '/')
                @include('includes.header')
            @endif
           
        </header>
    
        <main>
            @yield('content')
        </main>
        
        @if (Request::path() == '/')
            <footer>
                @include('includes.footer')
            </footer>
        @endif

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
