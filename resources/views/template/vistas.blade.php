<!DOCTYPE HTML>
<html>

<head>
	<title>Future Imperfect by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/css/main.css" />
</head>

<body class="is-preload">

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

		<!-- Menu -->
		<section id="menu">

			<!-- Search -->
			<section>
				<form class="search" method="get" action="#">
					<input type="text" name="query" placeholder="Search" />
				</form>
			</section>

			<!-- Links -->
			<section>
				<ul class="links">
					<li>
						<a href="#">
							<h3>Lorem ipsum</h3>
							<p>Feugiat tempus veroeros dolor</p>
						</a>
					</li>
					<li>
						<a href="#">
							<h3>Dolor sit amet</h3>
							<p>Sed vitae justo condimentum</p>
						</a>
					</li>
					<li>
						<a href="#">
							<h3>Feugiat veroeros</h3>
							<p>Phasellus sed ultricies mi congue</p>
						</a>
					</li>
					<li>
						<a href="#">
							<h3>Etiam sed consequat</h3>
							<p>Porta lectus amet ultricies</p>
						</a>
					</li>
				</ul>
			</section>

			<!-- Actions -->
			<section>
				<ul class="actions stacked">
					<li><a href="#" class="button large fit">Log In</a></li>
				</ul>
			</section>

		</section>

		<!-- Main -->

		<div id="main">
			@yield('content')
		</div>

		<!-- Sidebar -->
		<section id="sidebar">

			<!-- Intro -->
			<section id="intro">
				<center>
					<a href="#"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--T3MmzkNY--/c_imagga_scale,f_auto,fl_progressive,h_1080,q_auto,w_1080/https://dev-to-uploads.s3.amazonaws.com/i/s1g4l5sfysyi4s2x8m32.png" alt="" width="250" height="210"></a>
				</center>
			</section>

			@yield('alter')

			<!--Help-->
			<section class="blurb">
				<center><h2>Ayuda</h2></center>
				<p>¿Aun tienes dudas? Puedes consultar tutoriales aqui.</p>
				<center><ul class="actions">
					<li><a href="{{route('tutorial')}}" class="button">Leer más</a></li>
				</ul>
				</center>
			</section>

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

		</section>

	</div>

	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>