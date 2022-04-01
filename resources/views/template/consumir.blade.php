<!DOCTYPE HTML>
<html>

<head>
    <title>Single - Future Imperfect by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body class="single is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="{{route('index')}}">Yeoman</a></h1>
            <nav class="links">
                <ul>
                    <li><a href="{{route('fundamentos')}}">Fundamentos</a></li>
                    <li><a href="{{route('implementacion')}}">Implementacion</a></li>
                    <li><a href="{{route('generador')}}">Generador</a></li>
                    <li><a href="{{route('api')}}">API</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- Post -->
            @yield('deploy')
        </div>

        <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <li><a href="https://twitter.com/EmKsode" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/juanignacio.lopez.9828" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/juanignacio.lopez.9828/?hl=es-la" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>

            </ul>
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
        </section>

    </div>

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/browser.min.js"></script>
    <script src="/js/breakpoints.min.js"></script>
    <script src="/js/util.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>