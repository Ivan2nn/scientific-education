<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Scientific Foundation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="mimi eDesign" content="http://mimiedesign.com" />
<!-- css -->
<link href="{!! asset('output/final.css') !!}" media="all" rel="stylesheet" type="text/css" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
	        <div class="navbar navbar-default navbar-static-top">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
	                </div>
	                <div class="navbar-collapse collapse ">
	                    <ul class="nav navbar-nav">
	                        <li class="active"><a href="index.html">Home</a></li> 
							<li><a href="about.html">About Us</a></li>
							<li><a href="services.html">Services</a></li>
	                        <li><a href="portfolio.html">Portfolio</a></li>
	                        <li><a href="pricing.html">Pricing</a></li>
	                        <li><a href="contact.html">Contact</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
		</header>
		<!-- end header -->
		<section id="featured">
		@if(Auth::guest())
            <a href="{{ url('/login')}}" class="homepage-links">Log In</a>
            <a href="{{ url('/register')}}" class="homepage-links homepage-links-second">Registrati</a>
        @else
            <a href="{{ url('/logout')}}">Log Out</a>
        @endif
		<!-- Slider -->
	        <div id="main-slider" class="flexslider">
	            <ul class="slides">
	              <li>
	                {!! Html::image('img/slides/1.jpg','Image slide 0') !!}
	                <div class="flex-caption">
	                    <h3>Awesome Design</h3> 
						<p>Doloribus omnis minus temporibus perferendis ipsa architecto non, magni quam</p>  
	                </div>
	              </li>
	              <li>
	                {!! Html::image('img/slides/2.jpg','Image slide 2') !!}
	                <div class="flex-caption">
	                    <h3>Fully Responsive</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitincidunt eius magni provident.</p> 
	                </div>
	              </li>
	              <li>
	                {!! Html::image('img/slides/3.jpg','Image slide 3') !!}
	                <div class="flex-caption">
	                    <h3>Multi-purpose Theme</h3> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>  
	                </div>
	              </li>
	            </ul>
	        </div>
		<!-- end slider -->
	 	@yield('content')
		
		<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Our Contact</h5>
						<address>
						<strong>Target company Inc</strong><br>
						JC Main Road, Near Silnile tower<br>
						 Pin-21542 NewYork US.</address>
						<p>
							<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
							<i class="icon-envelope-alt"></i> email@domainname.com
						</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Quick Links</h5>
						<ul class="link-list">
							<li><a href="#">Latest Events</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Latest posts</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
							<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Recent News</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
							<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							<p>
								<span>&copy; Target 2014 All right reserved. By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="output/final.js"></script>
</body>
</html>