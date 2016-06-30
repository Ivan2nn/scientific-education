<div class="form-group">
    {!! Form::label('title','Titolo del documento',array('class' => 'control-label')) !!}
    {!! Form::text('title',null,array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Descrizione del documento',array('class' => 'control-label')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Da pubblicare:') !!}
    {!! Form::input('date', 'published_at', $editMaterial ? null : date('d-m-Y'), ['class' => 'form-control']) !!}  
</div>
@if ($editMaterial)
    <div class="form-group">
        {!! Form::label('file_material','Materiale presente',array('class' => 'control-label')) !!}
        <div class="col-sm-5">
            {!! Form::label('file_material',$material->filename,array('class' => 'form-control')) !!}
        </div>
    </div>
@endif
<div class="form-group">
    {!! Form::label('file','Seleziona il materiale da inserire') !!}
    {!! Form::file('file') !!}  
</div>
<div class="form-group">        
    {!! Form::submit($submitButtonText, array('class' => 'btn btn-warning')) !!}
</div>