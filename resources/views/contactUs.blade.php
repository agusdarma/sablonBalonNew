@extends('layouts.main')
<?php use App\Http\Controllers\MainMenuController; ?>
<?php $labelSettingPhoneNo = MainMenuController::getLabelSetting(Constants::LABEL_SETTING_PHONE_NO()); ?>
<?php $labelSettingAddress = MainMenuController::getLabelSetting(Constants::LABEL_SETTING_ADDRESS()); ?>
<?php $labelSettingWorkingHour = MainMenuController::getLabelSetting(Constants::LABEL_SETTING_WORKING_HOUR()); ?>
<?php $labelSettingCopyright = MainMenuController::getLabelSetting(Constants::LABEL_SETTING_COPYRIGHT()); ?>
@section('header')
  <div class="banner">
    <div class="header-top">
      <div class="container">
        <div class="indicat">
          <span><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{ $labelSettingAddress->label_value }}</span>
        </div>
        <div class="detail">
          <ul>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>{{ $labelSettingPhoneNo->label_value }}</li>
            <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> {{ $labelSettingWorkingHour->label_value }} </li>
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
							<form id="contact_form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <p class="errorGeneral text-center alert alert-danger hidden"></p>
								<label for="name">{{ __('lang.contact.name') }} </label>
								<input id="name" type="text" name="name" placeholder="Your name">
                <p class="errorName text-center alert alert-danger hidden"></p>
								<div class="row">
									<div class="col-md-6 row-grid">
									<label for="email">{{ __('lang.contact.email') }} </label>
									<input id="email" type="text" name="email" placeholder="Email address">
                  <p class="errorEmail text-center alert alert-danger hidden"></p>
									</div>
										<div class="col-md-6 row-grid">
										<label for="phone">{{ __('lang.contact.phone') }} </label>
									<input id="phone" type="text" name="phone" placeholder="Phone number">
                  <p class="errorPhone text-center alert alert-danger hidden"></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<label for="subject">{{ __('lang.contact.subject') }} </label>
								<input id="subject" type="text" name="subject" placeholder="Subject">
                <p class="errorSubject text-center alert alert-danger hidden"></p>
								<div class="row1">
								<label for="message">{{ __('lang.contact.message') }} </label>
								<textarea id="message" placeholder="Message" name="message" ></textarea>
                <p class="errorMessage text-center alert alert-danger hidden"></p>
								</div>
                <div class="row1">
                  <div class="g-recaptcha"
                             data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}">
                  </div>
                </div>
                <div class="row1">
                  <div class="box-footer">
                    <button type="button" class="btn btn-success add">{{ __('lang.button.submit') }}</button>
                  </div>
                </div>
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
		</div>
@endsection
@section('jsSelect2')
<script src="{{asset('toastr/js/toastr.min.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
    function clearInputAdd() {
      $('#name').val('');
      $('#email').val('');
      $('#phone').val('');
      $('#subject').val('');
      $('#message').val('');
    }

    function hiddenError() {
      $('.errorName').addClass('hidden');
      $('.errorEmail').addClass('hidden');
      $('.errorPhone').addClass('hidden');
      $('.errorSubject').addClass('hidden');
      $('.errorMessage').addClass('hidden');
      $('.errorGeneral').addClass('hidden');


    };

    $('.box-footer').on('click', '.add', function() {
      // console.log('masuk sini');
      var form = document.forms.namedItem("contact_form");
      var formdata = new FormData(form);
        hiddenError();
        $.ajax({
              async: true,
              type: "POST",
              dataType: "json",
              contentType: false,
              url: '{{ url( '/contactUs/send' ) }}',
              data: formdata,
              processData: false,
              success: function(data) {
                hiddenError();
                  if (data.rc!=0) {
                      if (data.errors.general) {
                          $('.errorGeneral').removeClass('hidden');
                          $('.errorGeneral').text(data.errors.general);
                      }
                      if (data.errors['g-recaptcha-response']) {
                          $('.errorGeneral').removeClass('hidden');
                          $('.errorGeneral').text(data.errors['g-recaptcha-response']);
                      }
                      if (data.errors.name) {
                          $('.errorName').removeClass('hidden');
                          $('.errorName').text(data.errors.name[0]);
                      }
                      if (data.errors.email) {
                          $('.errorEmail').removeClass('hidden');
                          $('.errorEmail').text(data.errors.email[0]);
                      }
                      if (data.errors.phone) {
                          $('.errorPhone').removeClass('hidden');
                          $('.errorPhone').text(data.errors.phone[0]);
                      }
                      if (data.errors.subject) {
                          $('.errorSubject').removeClass('hidden');
                          $('.errorSubject').text(data.errors.subject[0]);
                      }
                      if (data.errors.message) {
                          $('.errorMessage').removeClass('hidden');
                          $('.errorMessage').text(data.errors.message[0]);
                      }
                      grecaptcha.reset();
                  } else {
                      toastr.success(data.message, 'Success Alert', {timeOut: 2000});
                      clearInputAdd();
                  }
              },
              error: function(request, status, err) {
                  if (status == "timeout") {
                      $('.errorGeneral').removeClass('hidden');
                      $('.errorGeneral').text('{{ __('lang.msg.ajax.timeout') }}');
                  } else {
                      $('.errorGeneral').removeClass('hidden');
                      $('.errorGeneral').text("error: " + request + status + err);
                  }
              },
              timeout: 10000
          });
    });
  </script>
@endsection
@section('cssSelect2')
<link rel="stylesheet" href="{{asset('toastr/css/toastr.min.css')}}">
@endsection
