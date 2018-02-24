<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Martijn Brands')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=cyp5auf4nvuakorr52wmpf166b4n860gznfj1kv49oc4qjrb"></script>
    <script>
      tinymce.init({
        selector: '#description'
      });
    </script>

</head>
<body>
    <div id="app">

        <header>
            @if (Request::path() == '/')
                @include('includes.header')
            @endif
           
        </header>
        @include('includes.navigation')

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
