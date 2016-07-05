<div class="form-group">
    {!! Form::label('title','Titolo dell\'evento', array('class' => 'control-label')) !!}
    {!! Form::text('title',null,array('class' => 'form-control')) !!}
    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('event_date', 'Data Evento:') !!}
    {!! Form::input('event_date', 'event_date',  $editSiteEvent ? $site_event->event_date->format('d-m-Y') : date('d-m-Y'), ['class' => 'form-control']) !!}
    @if ($errors->has('event_date'))
        <span class="help-block">
            <strong>{{ $errors->first('event_date') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Da pubblicare:') !!}
    {!! Form::input('publiched_at', 'published_at',  $editSiteEvent ? $site_event->published_at->format('d-m-Y') : date('d-m-Y'), ['class' => 'form-control']) !!}
    @if ($errors->has('published_at'))
        <span class="help-block">
            <strong>{{ $errors->first('published_at') }}</strong>
        </span>
    @endif
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