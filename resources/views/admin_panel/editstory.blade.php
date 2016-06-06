@extends ('partials.layout')

@section('content')

<h1>Modify Story</h1>
    
   {!!Form::model($story, ['route' => ['story.update', $story], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
    
    @include('admin_panel.partials.story_form',['submitButtonText' => 'Modifica la notizia', 'editStory' => true]);
    
    {!! Form::close() !!} 

@endsection