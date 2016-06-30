@extends('partials.layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Documentazione pubblicata</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="internal-text">
			@foreach ($materials as $material)
				<div class="panel panel-default bootcards-file">
					<div class="panel-heading">
						<h3 class="panel-title">{!! $material->title !!}</h3>
					</div>
					<div class="list-group">
						<div class="list-group-item">
						  <a href="#">
						    <i class="icon-file-pdf"></i>
						  </a>
						  <h4 class="list-group-item-heading">
						    <a href="#">
						      {!! $material->filename !!}
						    </a>
						  </h4>
						  <p class="list-group-item-text"><strong>PDF</strong></p>
						  <p class="list-group-item-text"><strong>3.2Mb</strong></p>
						</div>
						<div class="list-group-item">
						  <p class="list-group-item-text"><strong>Aggiunto il {!! $material->published_at->format('d-M-Y') !!}</strong></p>
						</div>
						<div class="list-group-item">
						  <p class="list-group-item-text">{!! $material->description !!}</p>
						</div>
					</div>
					<div class="panel-footer">
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<button class="btn btn-default btn-special">
								  <i class="fa fa-arrow-down"></i>
								  Download
								</button>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

@endsection