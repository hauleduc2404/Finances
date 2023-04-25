<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="#">
	<meta name="description" content="#">
	<title>{{$domainName->name ?? 'Home'}}</title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/client/assets/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/client/assets/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/client/assets/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="index.html#">
	<link rel="shortcut icon" href="/client/assets/images/favicon.ico">
	<!-- Bootstrap -->
	<link href="/client/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="/client/assets/css/font-awesome.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="/client/assets/css/font/flaticon.css" rel="stylesheet">
	<link href="/client/assets/font/flaticon.css" rel="stylesheet">
	<!-- Slick Slider -->
	<link href="/client/assets/css/slick.css" rel="stylesheet">
	<!-- Range Slider -->
	<link href="/client/assets/css/ion.rangeSlider.min.css" rel="stylesheet">
	<!-- Datepicker -->
	<link href="/client/assets/css/datepicker.css" rel="stylesheet">
	<!-- magnific popup -->
	<link href="/client/assets/css/magnific-popup.css" rel="stylesheet">
	<!-- Nice Select -->
	<link href="/client/assets/css/nice-select.css" rel="stylesheet">
	<!-- Animate -->
	<link href="/client/assets/css/animate.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="/client/assets/css/style.css" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="/client/assets/css/responsive.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- place -->
</head>

<body class="@yield('body-class', '')">
	<!-- Start Main Body -->
	<div class="main-body">
		@include('client.partial.header')
		@yield('content')
		@include('client.partial.footer')
		<div id="back-top" class="back-top"> <a href="index.html#top"><i class="flaticon-up-arrow"></i></a>
		</div>
	</div>
	<div class="modal fade video-modal" id="videobox">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-header border-0 no-padding bg-transparent">
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body no-padding">
              <iframe src="https://www.youtube.com/embed/AdZrEIo6UYU" allow="autoplay"></iframe>
            </div>
          </div>
        </div>
    </div>
	<!-- End Main Body -->
	<!-- Place all Scripts Here -->
	<!-- jQuery -->
	<script src="/client/assets/js/jquery.min.js"></script>
	<!-- Popper -->
	<script src="/client/assets/js/popper.min.js"></script>
	<!-- Bootstrap -->
	<script src="/client/assets/js/bootstrap.min.js"></script>
	<!-- Range Slider -->
	<script src="/client/assets/js/ion.rangeSlider.min.js"></script>
	<!-- Slick Slider -->
	<script src="/client/assets/js/slick.min.js"></script>
	<!-- Datepicker -->
	<script src="/client/assets/js/datepicker.js"></script>
	<script src="/client/assets/js/datepicker.en.js"></script>
	<!-- Nice Select -->
	<script src="/client/assets/js/jquery.nice-select.js"></script>
    <!-- Steps -->
    <script src="/client/assets/js/jquery-steps.js"></script>
	<!-- Nice Select -->
	<script src="/client/assets/js/particles.js"></script>
	<!-- Magnific Popup -->
	<script src="/client/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
	<!-- Isotope Gallery -->
	<script src="/client/assets/js/isotope.pkgd.min.js"></script>
	<!-- Wow js -->
	<script src="/client/assets/js/wow.min.js"></script>
	<!-- Custom Js -->
	<script src="/client/assets/js/custom.js"></script>
	<!-- /Place all Scripts Here -->
</body>

</html>
