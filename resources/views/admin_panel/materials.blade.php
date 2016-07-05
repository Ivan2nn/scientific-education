@extends('partials.layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Modifica Documentazione pubblicata</h2>
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
						  	@if ($material->isAcrobatFile())
						    	<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						    @elseif ($material->isTextFile())
						    	<i class="fa fa-file-text" aria-hidden="true"></i>
						    @elseif ($material->isMediaFile())
						    	<i class="fa fa-file-audio-o" aria-hidden="true"></i>
						    @else
						    	<i class="fa fa-file-o" aria-hidden="true"></i>
						    @endif
						  </a>
						  <h4 class="list-group-item-heading">
						    <a href="#">
						      {!! $material->filename !!}
						    </a>
						  </h4>
						  <p class="list-group-item-text"><strong>{!! strtoupper($material->filetype) !!}</strong></p>
						  <p class="list-group-item-text"><strong>{!! $material->filesize !!}</strong></p>
						</div>
						<div class="list-group-item">
						  <p class="list-group-item-text"><strong>Aggiunto il {!! $material->published_at->format('d-M-Y') !!}</strong></p>
						</div>
						<div class="list-group-item">
						  <p class="list-group-item-text">{!! $material->description !!}</p>
						</div>
						@if ($material->isMediaFile())
							<div class="list-group-item">
						  		<audio controls class="material-audio">
						  		<source src = {!! asset($material->file) !!} type="audio/mp3">
						  		</audio>	
							</div>
						@endif
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-6">
								  <button class="btn btn-primary"><a href="{!! URL::route('material.edit', array('material'=> $material)) !!}"><i class="fa fa-wrench" aria-hidden="true"></i>Modifica</a></button>
							</div>
							<div class="col-md-6">
								{!! Form::open(['method' => 'DELETE', 'route' => ['material.destroy', $material]]) !!}
									<button type="submit" class="btn btn-primary pull-right delete-btn"><i class="fa fa-trash-o" aria-hidden="true"></i>Elimina</button>
								{!! Form::close() !!}
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