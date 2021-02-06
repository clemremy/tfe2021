<!doctype html>
<html>

<head>
    @include('includes.head')

</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <section id="app">
        @yield('content')
    </section>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>