@extends('partials.layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Eventi</h2>
			@if ($siteEvents)
			<ul class="event-list">
				@foreach($siteEvents as $site_event)
				<li>
					<time datetime={!! $site_event->event_date !!}>
						<span class="day">{!! $site_event->event_date->day !!}</span>
						<span class="month">{!! $site_event->event_date->format('M') !!}</span>
						<span class="year">{!! $site_event->event_date->year !!}</span>
					</time>
					<!-- <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" /> -->
					<div class="info">
						<h2 class="title">{!! $site_event->title !!}</h2>
						<p class="desc">{!! $site_event->excerpt !!}</p>
						<div class="row">
							<div class="col-md-6">
								  <button class="btn btn-primary"><a href="{!! URL::route('site-event.edit', array('site_event'=> $site_event)) !!}"><i class="fa fa-wrench" aria-hidden="true"></i>Modifica</a></button>
							</div>
							<div class="col-md-6">
								{!! Form::open(['method' => 'DELETE', 'route' => ['site-event.destroy', $site_event]]) !!}
									<button type="submit" class="btn btn-primary pull-right delete-btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Elimina</button>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
			@endif
		</div>
	</div>
</div>

@endsection