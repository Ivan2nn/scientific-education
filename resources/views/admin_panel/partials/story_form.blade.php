<div class="form-group">
    {!! Form::label('title','Titolo della new',array('class' => 'control-label col-sm-2')) !!}
    <div class="col-sm-5">
        {!! Form::text('title',null,array('class' => 'form-control')) !!}
    </div>
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
    {!! Form::label('body','Notizia',array('class' => 'control-label col-sm-2')) !!}
    <div class="col-sm-5">
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">        
    <div class="col-sm-offset-2 col-sm-5"> 
        {!! Form::submit($submitButtonText, array('class' => 'btn btn-warning')) !!}
    </div>
</div>