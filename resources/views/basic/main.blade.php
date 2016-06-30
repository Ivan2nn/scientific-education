@extends('partials.layout')

@section('content')

<section id="featured">
<!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
          <li>
            {!! Html::image('img/slides/roma-1.jpg','Image slide 0') !!}
            <div class="flex-caption">
                <h3>Lorem Ipsum</h3> 
				<p>Doloribus omnis minus temporibus perferendis ipsa architecto non, magni quam</p>  
            </div>
          </li>
          <li>
            {!! Html::image('img/slides/StPeter.jpg','Image slide 2') !!}
            <div class="flex-caption">
                <h3>Lorem Ipsum</h3> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elitincidunt eius magni provident.</p> 
            </div>
          </li>
          <li>
            {!! Html::image('img/slides/3.jpg','Image slide 3') !!}
            <div class="flex-caption">
                <h3>Lorem Ipsum</h3> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>  
            </div>
          </li>
        </ul>
    </div>
<!-- end slider -->
</section>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">La Fondazione</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<p class='internal-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus, lectus at laoreet placerat, nisl odio tempor ante, in venenatis nisi orci vel sapien. Phasellus sed mauris nibh. Morbi in enim id tortor ullamcorper eleifend in eget nibh. Mauris sodales ligula quis urna tincidunt, ac lobortis neque tincidunt. Suspendisse id leo leo. Sed nec ornare tortor. Integer venenatis lectus ut libero efficitur, vel pretium felis pellentesque. Duis scelerisque risus orci, ut mollis dui pharetra eu. Proin mollis tincidunt massa. Nunc ac tempor lectus. Praesent nec semper massa. Cras non rutrum nisl, sit amet auctor leo. Duis viverra mi sit amet ultrices ornare. Nunc vulputate tempor erat at vulputate. Mauris eget turpis magna.</p>
			<p>Proin rutrum commodo aliquam. In porta ipsum ac rutrum facilisis. Fusce eu posuere augue. Proin consequat posuere justo, nec molestie diam commodo quis. Nunc maximus libero eget lacus laoreet ornare. Sed lacus magna, volutpat eget ultrices scelerisque, lacinia nec mauris. Aenean ut auctor ligula. Proin vitae sapien nisi. Phasellus libero velit, maximus non pharetra non, accumsan in dui. Cras imperdiet leo lobortis eros luctus placerat.</p>
			<p>Suspendisse ultrices, est non ultricies condimentum, diam tortor imperdiet magna, vitae rhoncus dolor risus sed magna. Aenean porttitor lectus efficitur mauris pharetra malesuada. Donec hendrerit risus turpis, nec tincidunt lectus dignissim non. Aliquam sit amet ipsum non ante posuere interdum. Donec porttitor tempus diam eu ornare. Nulla sit amet molestie urna. Mauris vitae magna vel justo interdum imperdiet et et enim. Donec turpis mi, porta nec ultrices sed, porttitor et quam. Duis non nunc ac est blandit tincidunt id sed orci. Morbi purus erat, porttitor non magna at, dignissim congue quam. Donec faucibus diam eget lacus volutpat pulvinar. Sed volutpat luctus velit a ultrices. In hac habitasse platea dictumst. Sed dictum tristique tincidunt. Sed lobortis condimentum sodales. </p>
		</div>
		<div class="col-md-5">
			@if ($siteEvents)
			<h2>Eventi</h2>
			<ul class="event-list">
				@foreach($siteEvents as $siteEvent)
				<li>
					<time datetime={!! $siteEvent->event_date !!}>
						<span class="day">{!! $siteEvent->event_date->day !!}</span>
						<span class="month">{!! $siteEvent->event_date->format('M') !!}</span>
						<span class="year">{!! $siteEvent->event_date->year !!}</span>
					</time>
					<!-- <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" /> -->
					<div class="info">
						<h2 class="title">{!! $siteEvent->title !!}</h2>
						<p class="desc">{!! $siteEvent->excerpt !!}</p>
						<ul>
							<li style="width:50%;"><a href={!! route('site-event.show', $siteEvent) !!}>Continua a leggere ...</a></li>
						</ul>
					</div>
				</li>
				@endforeach
			</ul>
			@endif
		</div>
	</div>
</div>

@endsection