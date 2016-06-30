@extends ('partials.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h1>Inserisci un nuvo evento:</h1>
	    
		    {!! Form::open(array('url'=>'site-event', 'class' => 'form-horizontal')) !!}
		    
		    @include('admin_panel.partials.site_event_form',['submitButtonText' => 'Inserisci l\'evento', 'editSiteEvent' => false])
		    
		    {!! Form::close() !!} 
	    </div>
    </div>
</div>
@endsection