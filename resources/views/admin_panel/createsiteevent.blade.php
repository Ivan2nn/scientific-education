@extends ('partials.layout')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Nuovo Evento</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="internal-text">
			    {!! Form::open(array('url'=>'site-event', 'class' => 'form-horizontal')) !!}
			    
			    @include('admin_panel.partials.site_event_form',['submitButtonText' => 'Inserisci l\'evento', 'editSiteEvent' => false])
			    
			    {!! Form::close() !!} 
			</div>
	    </div>
    </div>
</div>
@endsection