@extends ('partials.layout')

@section('content')

<h1>New Story</h1>
    
    {!! Form::open(array('url'=>'story', 'class' => 'form-horizontal')) !!}
    
    <div class="form-group">
        {!! Form::label('title','Titolo della new',array('class' => 'control-label col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::text('title','',array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'Da pubblicare:') !!}
        {!! Form::input('date', 'published_at',  date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('excerpt','Titolo della new',array('class' => 'control-label col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::text('excerpt','',array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('body','Notizia',array('class' => 'control-label col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-5"> 
            {!! Form::submit('Aggiorna', array('class' => 'btn btn-warning')) !!}
        </div>
    </div>
    {!! Form::close() !!} 

@endsection