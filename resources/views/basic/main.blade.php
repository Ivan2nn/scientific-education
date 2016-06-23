@extends('partials.layout')

@section('content')

<h1>Main Page</h1>
<div class="row">
	<div class="col-xs-5 col-sm-offset-2 col-sm-5">
		<ul class="event-list">
			<li>
				<time datetime="2014-07-20">
					<span class="day">4</span>
					<span class="month">Jul</span>
					<span class="year">2014</span>
					<span class="time">ALL DAY</span>
				</time>
				<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
				<div class="info">
					<h2 class="title">Independence Day</h2>
					<p class="desc">United States Holiday</p>
				</div>
			</li>
		</ul>
	</div>
</div>

@endsection