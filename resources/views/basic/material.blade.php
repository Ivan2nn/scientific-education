@extends('partials.layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Documento</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="events-meta-title internal-text clearfix">
				<div class="row">
					<div class="col-md-6">
						<h2 class="page-title">{!! $material->title !!}</h2>
					</div>
					<div class="col-md-6">
						<h2 class="page-title pull-right">Pubblicato il: {!! $material->published_at->format('d-M-Y'); !!}</h2>
					</div>
				</div>
			</div>
			<div class="news-body clearfix">
				<p>
					{!! $material->description !!}
				</p>
				
			</div>
		</div>
	</div>
</div>

<h1>{!! $material->title !!}</h1>


<p>{!! $material->body !!}</p>
<a href={!! route('material.edit', $material) !!} class="btn btn-info" role="button">Modifica</a>


@endsection