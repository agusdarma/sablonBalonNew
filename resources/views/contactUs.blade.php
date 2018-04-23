@extends('layouts.main')

@section('header')
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
          <h1><a href="/">SablonBalon</a></h1>
        </div>
        <div class="navigation-right">
          <span class="menu"><img src="{{asset('roasting/images/menu.png')}}" alt=" " /></span>
          <nav class="link-effect-3" id="link-effect-3">
            <ul class="nav1 nav nav-wil">
              <li><a data-hover="Home" href="/">Home</a></li>
              <li><a data-hover="Gallery" href="#">Gallery</a></li>
              <li class="active"><a data-hover="Contact" href="/contactUs">Contact</a></li>
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
    </div>
  </div>
@endsection
@section('content')
<!--content-->
		<div class="content">
			<!--contact-->
			<div class="contact-w3l">
				<div class="container">
					<h2 class="tittle">Contact us</h2>
					<div class="contact-grids">
						<div class="col-md-6 contact-grid">
							<h4>Your Message</h4>
							<span>Please send your message below.</span>
							<form action="#" method="post">
								<label>Name</label>
								<input type="text" name="Name" placeholder="Your name" required>
								<div class="row">
									<div class="col-md-6 row-grid">
									<label>Email</label>
									<input type="text" name="Email" placeholder="Email address" required>
									</div>
										<div class="col-md-6 row-grid">
										<label>Phone</label>
									<input type="text" name="Phone" placeholder="Phone number" required>
									</div>
									<div class="clearfix"></div>
								</div>
								<label>Subject</label>
								<input type="text" name="Subject" placeholder="Subject" required>
								<div class="row1">
								<label>Message</label>
								<textarea placeholder="Message" name="Message" ></textarea>
								</div>
								<input type="submit" value="Send message">
							</form>
						</div>
						<div class="col-md-6 contact-grid">
							<div class="col-md-6 contact-left">
							</div>
							<div class="col-md-6 contact-right">
								<h4>Timings</h4>
								<div class="cont-info">
									<h5>Monday - Sunday</h5>
									<p>08:00 AM - 23:00 PM</p>									
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
			<!--contact-->
		</div>
		<!--content-->
@endsection
