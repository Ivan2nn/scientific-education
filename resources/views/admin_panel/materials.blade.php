@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Nuova Documentazione</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			@foreach ($materials as $material)
				<div class="panel panel-success">
					<header class="panel-heading">
						<h3 class="panel-title">{!! $material->title !!}</h3>
						<a href={!! route('material.show', $material) !!} class="btn btn-default show-material"> Mostra </a>
					</header>
					<div class="panel-body">
			        	<h3>Descrizione del documento</h3>
				   		<p class="speaker">{!! $material->description !!}</p>
			        </div>
				</div>
			@endforeach
		</div>
	</div>
</div>

@endsection