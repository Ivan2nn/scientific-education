<div class="form-group">
    {!! Form::label('title','Titolo del documento',array('class' => 'control-label')) !!}
    {!! Form::text('title',null,array('class' => 'form-control')) !!}
    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('description','Descrizione del documento',array('class' => 'control-label')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5']) !!}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Da pubblicare:') !!}
    {!! Form::input('date', 'published_at', $editMaterial ? $material->published_at->format('d-m-Y') : date('d-m-Y'), ['class' => 'form-control']) !!}  
    @if ($errors->has('published_at'))
        <span class="help-block">
            <strong>{{ $errors->first('published_at') }}</strong>
        </span>
    @endif
</div>
@if ($editMaterial)
    <div class="form-group">
        {!! Form::label('file_material','Materiale presente',array('class' => 'control-label')) !!}
        {!! Form::label('file_material',$material->filename,array('class' => 'form-control')) !!}
    </div>
@endif
<div class="form-group">
    {!! Form::label('file','Seleziona il materiale da inserire') !!}
    {!! Form::file('file') !!}  
    @if ($errors->has('file'))
        <span class="help-block">
            <strong>{{ $errors->first('file') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">        
    {!! Form::submit($submitButtonText, array('class' => 'btn btn-warning')) !!}
</div>