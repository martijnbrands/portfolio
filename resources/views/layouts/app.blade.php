@include('includes.head');
<body>
    <div id="app">
        @include('includes.navigation');
        @yield('content')
    </div>
@include('includes.footer');
