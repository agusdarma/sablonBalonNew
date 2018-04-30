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
  @yield('header')
	  @yield('content')
			<div class="footer-w3l">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid">
							<h4>About</h4>
							<ul>
								<!--  <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Duri Intan, Jakarta Barat, Indonesia, 11510</li>-->
								<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>{{ $labelSettingPhoneNo->label_value }}</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:balonsablon@yahoo.com"> balonsablon@yahoo.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>{{ $labelSettingWorkingHour->label_value }}</li>
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
						<p>&copy; {{ $labelSettingCopyright->label_value }}</a></p>
					</div>
				</div>
			</div>
      @yield('jsSelect2')
</body>
</html>
