@extends ('partials.layout')

@section('content')

<h1>New Story</h1>
    
    {!! Form::open(array('url'=>'story', 'class' => 'form-horizontal')) !!}
    
    @include('admin_panel.partials.story_form',['submitButtonText' => 'Inserisci la notizia', 'editStory' => false]);
    
    {!! Form::close() !!} 

@endsection