@extends ('partials.layout')

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
    		<div class="internal-text">
			    {!! Form::open(array('url'=>'material', 'files' => true, 'class' => 'form-horizontal')) !!}
			    
			    @include('admin_panel.partials.material_form',['submitButtonText' => 'Inserisci il materiale', 'editMaterial' => false])
			    
			    {!! Form::close() !!} 
		    </div>
		</div>
	</div>
</div>


@endsection