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
	                    <a href={!! route('home') !!} class="navbar-brand"><img src="img/logo.png" alt="logo"/></a>
	                </div>
	                <div class="navbar-collapse collapse ">
	                    <ul class="nav navbar-nav">
	                        <li class="active">{!! link_to_route('home', $title = 'HomePage', $parameters = array(), $attributes = array()); !!}</li> 
							@if(!Auth::guest() && !Auth::user()->isBasic())
								<li>
									{!! link_to('material', $title = 'Documenti', $parameters = array(), $attributes = array()); !!}
								</li>
            				@endif
	                        <li>{!! link_to('donate', $title = 'Donazioni', $parameters = array(), $attributes = array()); !!}</li>
	                        <li>{!! link_to('contacts', $title = 'Contatti', $parameters = array(), $attributes = array()); !!}</li>
	                        <li>
	                        	@if(Auth::guest())
            						{!! link_to('login', $title = 'Log in', $parameters = array(), $attributes = array()); !!}
        						@else
            						{!! link_to('logout', $title = 'Log out', $parameters = array(), $attributes = array()); !!}
        						@endif
	                        </li>
	                        <li>
	                        	@if ( Auth::check() && Auth::user()->isAdmin())
            						{!! link_to('admin', $title = 'Admin', $parameters = array(), $attributes = array()); !!}
        						@endif
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
		</header>
		<!-- end header -->
		
	 	@yield('content')
		
		<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="widget">
						<h5 class="widgetheading">Our Contact</h5>
						<address>
						<strong>Scientific Foundation</strong><br>
						 Via Vito Volterra, 62<br>
						 00142 - Roma, Italy.</address>
						<p>
							<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
							<i class="icon-envelope-alt"></i> email@domainname.com
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="widget">
						<h5 class="widgetheading">Link Esterni</h5>
						<ul class="link-list">
							<li><a href="#">Sito 1</a></li>
							<li><a href="#">Sito 2</a></li>
							<li><a href="#">Sito 3</a></li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Latest posts</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
							<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
						</ul>
					</div>
				</div> -->
				<!-- <div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Recent News</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
							<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
							<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
						</ul>
					</div>
				</div> -->
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
	<!-- Google Maps -->
    
	<script src="{!! asset('output/final.js') !!}"></script>
</body>
</html>