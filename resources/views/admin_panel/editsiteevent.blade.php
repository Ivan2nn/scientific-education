@extends ('partials.layout')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Modifica l'evento selezionato</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8">
    		<div class="internal-text">
			   {!!Form::model($site_event, ['route' => ['site-event.update', $site_event], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
			    
			    @include('admin_panel.partials.site_event_form',['submitButtonText' => 'Modifica la notizia', 'editSiteEvent' => true])
			    
			    {!! Form::close() !!} 
		    </div>
		</div>
	</div>
</div>

@endsection