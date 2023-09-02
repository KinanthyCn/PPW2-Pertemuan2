<html>
<head>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Menggunakan asset() untuk mengakses file CSS -->
</head>
<body>
    <header>
        <h1>@yield('header')</h1>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('js/index.js') }}"></script> <!-- Menggunakan asset() untuk mengakses file JavaScript -->
</body>
</html>