<div class="form-group">
    {!! Form::label('title','Titolo della new',array('class' => 'control-label')) !!}
    {!! Form::text('title',null,array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('story_date', 'Data Evento:') !!}
    {!! Form::input('event_date', 'story_date',  $editStory ? null : date('d-m-Y'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Da pubblicare:') !!}
    {!! Form::input('date', 'published_at',  $editStory ? null : date('d-m-Y'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Descrizione dell\'evento',array('class' => 'control-label')) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'size' => '30x5']) !!}
</div>

<div class="form-group">        
    <div class="col-md-5"> 
        {!! Form::submit($submitButtonText, array('class' => 'btn btn-warning')) !!}
    </div>
</div>