@extends('partials.layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Evento</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="events-meta-title internal-text clearfix">
				<h1 class="page-title">{!! $site_event->title !!}</h1>
				<div class="event-meta">
					<span class="event-date">{!! $site_event->event_date->day !!} {!! $site_event->event_date->format('M') !!} {!! $site_event->event_date->year !!}</span>
				</div>
			</div>
			<div class="news-body clearfix">
				<p>
					{!! $site_event->body !!}
				</p>
			</div>
		</div>
	</div>
</div>

@endsection