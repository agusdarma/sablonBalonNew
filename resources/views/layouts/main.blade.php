<!DOCTYPE html>
<html>
<head>
<title>SablonBalon.com - Perusahaan Sablon Balon No 1 Di Indonesia</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{asset('roasting/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('roasting/css/style.css')}}">
<link rel="shortcut icon" href="{{asset('roasting/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('roasting/images/favicon.ico')}}" type="image/x-icon">
@yield('cssSelect2')
@yield('jsSelect2')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="SablonBalon.com - Perusahaan Sablon Balon No 1 Di Indonesia" />
<meta property="og:description" content="Perusahaan sablon balon paling murah dan terpercaya di Jakarta dan di Surabaya,jenis balon yang kami punya balon dove,balon oval dan balon metalic."/>
<meta name="keywords" content="Balon Printing, Balon Sablon, Jual Balon Printing, Jual Balon Sablon, Balon Dove, Jual Balon Dove, Balon Oval, Jual Balon Oval,Balon Metalic, Jual Balon Metalic" />
<meta name="description" content="Perusahaan sablon balon paling murah dan terpercaya di Jakarta dan di Surabaya,jenis balon yang kami punya balon dove,balon oval dan balon metalic." />
<meta name="robots" content="index,follow"/>
<meta name="google-site-verification" content="POcD2wVTfRWSA9TjsF8sXmAdv2EAeGoxdwg-D34TKYQ" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43775406-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="{{asset('roasting/js/jquery.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
</head>
<body>
	<script src="{{asset('roasting/js/jquery.vide.min.js')}}"></script>
	<div  data-vide-bg="poster:{{asset('roasting/video/vd')}}" data-vide-options="posterType: jpg">
		<div class="banner">
			<div class="header-top">
				<div class="container">
					<div class="indicat">
						<span><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Duri Intan, Jakarta Barat, Indonesia, 11510</span>
					</div>
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 817-4816-268</li>
							<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sun 8:00 am to 23:00 pm </li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<div class="navigation">
					<div class="logo">
						<h1><a href="Home.web">SablonBalon</a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="{{asset('roasting/images/menu.png')}}" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Home" href="Home.web">Home</a></li>
								<li><a data-hover="Gallery" href="#">Gallery</a></li>
								<li><a data-hover="Contact" href="#">Contact</a></li>
							</ul>
						</nav>

									<script>
									   $( "span.menu" ).click(function() {
										 $( "ul.nav1" ).slideToggle( 300, function() {

										  });
										 });
									</script>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="w3ls_banner_info">
					<h3>Selamat datang di Balon Sablon Jakarta Murah! </h3>
					<p>Selamat datang di Balon Sablon Jakarta Murah! Sejalan dengan banyaknya media promosi, kami menawarkan salah satu cara promosi yang mudah dan murah menggunakan balon. Sejauh ini media balon promosi terbukti banyak peminatnya karena efektif, mudah, murah dan efisien. Balon promosi atau balon iklan dapat digunakan untuk keperluan Grand Launching, Launching produk, pameran, expo, ulang tahun dan masih banyak lagi.
					</p>
				</div>
			</div>
		</div>
	</div>
	  @yield('content')
			<div class="footer-w3l">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid">
							<h4>About</h4>
							<ul>
								<!--  <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Duri Intan, Jakarta Barat, Indonesia, 11510</li>-->
								<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>+62 817-4816-268</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:balonsablon@yahoo.com"> balonsablon@yahoo.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sun 08:00 am to 23:00 pm</li>
							</ul>
							<div class="social-icon">
								<a target="_blank" href="https://www.instagram.com/sablonbalon_id"><i class="icon"></i></a>
								<!--  <a href="#"><i class="icon1"></i></a>
								<a href="#"><i class="icon2"></i></a>
								<a href="#"><i class="icon3"></i></a>-->
							</div>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Our Special</h4>
							<ul>
								<li>On time delivery</li>
								<li>Reasonable Price</li>
								<li>Stock availability</li>
								<li>Best quality</li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Popular</h4>
						</div>
						<div class="col-md-3 footer-grid">
							<h4> Member Area</h4>
							<form action="#" method="post">
								<p>Name</p>
								<input type="text" disabled="disabled" name="Name" placeholder="" required="">
								<p>password</p>
								<input type="password" disabled="disabled" name="Password" placeholder="" required="">
								<input type="submit" disabled="disabled" value="LOGIN">
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="copy-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; 2013 - 2016 SablonBalon. All rights reserved | Design by W3layouts</a></p>
					</div>
				</div>
			</div>
</body>
</html>
