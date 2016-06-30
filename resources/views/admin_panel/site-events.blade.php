@extends('partials.layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Eventi</h2>
			@if ($siteEvents)
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