<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="is-preload">
     <!-- Navbar -->
    @include('./layouts/navbar')

     <!-- content -->
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>



     <!-- Footer -->
     <br>
     <style>
         #footer span{
            right:-35%;
            position: relative;
            margin: 0px 20px;
         }
     </style>
    <footer id="footer">
        <span>
            <a href="/insertURL">
                <button>Submit a Website</button>
            </a>
        </span>
        <span>
            <a href="/phishedURL">
                <button>Vulnerable Sites List</button>
            </a>
        </span>
            <br><br>
        <ul class="icons">
            <li>&copy; Phishing Checker</li><li>Github: <a href="https://github.com/genialkartik/phishing-checker">Source Code</a></li>
            <li><a href="https://twitter.com/genialkartik" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://instagram.com/genialkartik" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://github.com/genialkartik" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="mailto:kartik9756@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>
    </footer>

 <!-- Scripts -->
     <script src="assets/js/main.js"></script>
</body>
</html>
