<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Transport System</title>
	<script>
		var baseUrl = "{{url('')}}";
	</script>
   <!-- CSS -->
    <link rel="stylesheet" href="{{asset('transport/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('transport/css/font-awesome.min.css')}}">
	  <link rel="stylesheet" href="{{asset('transport/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('transport/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('transport/css/slidr.css')}}">
    <link rel="stylesheet" href="{{asset('transport/css/main.css')}}">
	  <link id="preset" rel="stylesheet" href="{{asset('transport/css/presets/preset1.css')}}">
    <link rel="stylesheet" href="{{asset('transport/css/responsive.css')}}">

    <!--javascript-->
    <script type="text/javascript" src="{{asset('js/reveal.js')}}"></script>


	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>


	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://demo.themeregion.com/trade/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->

			{{--	<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#category">Category</a></li>
							<li><a href="#ads">all ads</a></li>
							<li><a href="#">Help/Support</a></li>
						</ul>
					</div>
				</div> --}}

				<!-- nav-right -->
				<div class="nav-right">

					<!-- sign-in -->
					@if(Auth::guest())
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li>					
						<a data-toggle="" href="{{ route('register') }}"><span class="change-text">Register</span></a>						
				
						</li>

						<li><a href="{{ route('login') }}"> Sign In </a></li>
					
					</ul><!-- sign-in -->
					@else
					<div class="dropdown language-dropdown">						
						<a data-toggle="dropdown" href="index.html#"><span class="change-text" style="margin-right:30px;">{{strtoupper(Auth::user()->lastname)}}</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
						 	<li><form id="logout-form" action="{{ url('logout') }}" method="POST" >
			              {{ csrf_field() }}
			            <button type="submit" class="btn btn-primary btn-block"><i class="icon-switch2"></i>Logout </button>
			                 </form></li>
						</ul>								
					 </div><!-- language-dropdown -->
				
	                   
					@endif	
				
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
		@if (session('message'))
			<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{{ session('message')}}</strong>
			</div>
		@endif
           @yield('content')
      

    	<!-- footer -->
        <footer id="footer" class="clearfix">
      		<!-- footer-top -->
      	{{--	<section class="footer-top clearfix">
      			<div class="container">
      				<div class="row">
      					<!-- footer-widget -->
      					<div class="col-sm-3">
      						<div class="footer-widget">
      							<h3>Quick Links</h3>
      							<ul>
      								<li><a href="index-two.html#">About Us</a></li>
      								<li><a href="index-two.html#">Contact Us</a></li>
      								<li><a href="index-two.html#">Careers</a></li>
      								<li><a href="index-two.html#">All Cities</a></li>
      								<li><a href="index-two.html#">Help & Support</a></li>
      								<li><a href="index-two.html#">Advertise With Us</a></li>
      								<li><a href="index-two.html#">Blog</a></li>
      							</ul>
      						</div>
      					</div><!-- footer-widget -->

      					<!-- footer-widget -->
      					<div class="col-sm-3">
      						<div class="footer-widget">
      							<h3>How to sell fast</h3>
      							<ul>
      								<li><a href="index-two.html#">How to sell fast</a></li>
      								<li><a href="index-two.html#">Membership</a></li>
      								<li><a href="index-two.html#">Banner Advertising</a></li>
      								<li><a href="index-two.html#">Promote your ad</a></li>
      								<li><a href="index-two.html#">Trade Delivers</a></li>
      								<li><a href="index-two.html#">FAQ</a></li>
      							</ul>
      						</div>
      					</div><!-- footer-widget -->

      					<!-- footer-widget -->
      					<div class="col-sm-3">
      						<div class="footer-widget social-widget">
      							<h3>Follow us on</h3>
      							<ul>
      								<li><a href="index-two.html#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
      								<li><a href="index-two.html#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
      								<li><a href="index-two.html#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
      								<li><a href="index-two.html#"><i class="fa fa-youtube-play"></i>youtube</a></li>
      							</ul>
      						</div>
      					</div><!-- footer-widget -->

      					<!-- footer-widget -->
      					<div class="col-sm-3">
      						<div class="footer-widget news-letter">
      							<h3>Newsletter</h3>
      							<p>Subscribe and be among the first to get notified!</p>
      							<!-- form -->
      							<form action="index-two.html#">
      								<input type="email" class="form-control" placeholder="Coming Soon" disabled>
      								<button type="submit" class="btn btn-primary" disabled>Sign Up</button>
      							</form><!-- form -->
      						</div>
      					</div><!-- footer-widget -->
      				</div><!-- row -->
      			</div><!-- container -->
      		</section><!-- footer-top --> --}}


      		<div class="footer-bottom clearfix text-center">
      			<div class="container">
      				<p><a href="#">UrbanTrans</a> Copyright &copy; 2017. UrbanTrans </p>
      			</div>
      		</div><!-- footer-bottom -->
      	</footer><!-- footer -->



          <!-- JS -->


          <script src="{{asset('transport/js/jquery.min.js')}}"></script>
          <script src="{{asset('transport/js/modernizr.min.js')}}"></script>
          <script src="{{asset('transport/js/bootstrap.min.js')}}"></script>
      	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
      	<script src="{{asset('transport/js/gmaps.min.js')}}"></script>
      	<script src="{{asset('transport/js/goMap.js')}}"></script>
      	<script src="{{asset('transport/js/map.js')}}"></script>
          <script src="{{asset('transport/js/owl.carousel.min.js')}}"></script>
          <script src="{{asset('transport/js/smoothscroll.min.js')}}"></script>
          <script src="{{asset('transport/js/scrollup.min.js')}}"></script>
          <script src="{{asset('transport/js/price-range.js')}}"></script>
          <script src="{{asset('transport/js/jquery.countdown.js')}}"></script>
          <script src="{{asset('transport/js/custom.js')}}"></script>
      	  <script src="{{asset('transport/js/switcher.js')}}"></script>
	    <script src="{{asset('transport/js/signup.js')}}"></script>
      	<script>
      	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      	  ga('create', 'UA-73239902-1', 'auto');
      	  ga('send', 'pageview');

      	</script>
        </body>
      </html>