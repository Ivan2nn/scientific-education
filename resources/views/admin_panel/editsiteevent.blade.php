@extends ('partials.layout')

@section('content')

<h1>Modify Story</h1>
    
   {!!Form::model($story, ['route' => ['site-event.update', $siteEvent], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
    
    @include('admin_panel.partials.site_event_form',['submitButtonText' => 'Modifica la notizia', 'editSiteEvent' => true]);
    
    {!! Form::close() !!} 

@endsection