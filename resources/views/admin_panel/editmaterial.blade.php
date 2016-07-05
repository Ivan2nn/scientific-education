@extends ('partials.layout')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Modifica il documento selezionato</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
    		<div class="internal-text">
			    {!!Form::model($material, ['route' => ['material.update', $material], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH',  'files' => true]) !!}
			    
			    @include('admin_panel.partials.material_form',['submitButtonText' => 'Modifica il materiale', 'editMaterial' => true])
			    
			    {!! Form::close() !!} 
		    </div>
		</div>
	</div>
</div>

@endsection