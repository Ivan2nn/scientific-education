<div class="form-group">
    {!! Form::label('title','Titolo della documento',array('class' => 'control-label col-sm-2')) !!}
    <div class="col-sm-5">
        {!! Form::text('title',null,array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Da pubblicare:') !!}
    {!! Form::input('date', 'published_at', $editMaterial ? null : date('d-m-Y'), ['class' => 'form-control']) !!}
    
</div>
@if ($editMaterial)
    <div class="form-group">
        {!! Form::label('file_material','Materiale presente',array('class' => 'control-label col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::label('file_material',$material->filename,array('class' => 'form-control')) !!}
        </div>
    </div>
@endif
<div class="form-group">
    {!! Form::label('file','Seleziona il materiale da inserire',array('class' => 'col-sm-2')) !!}
    <div class="col-sm-5">
        {!! Form::file('file') !!}
    </div>    
</div>
<div class="form-group">        
    <div class="col-sm-offset-2 col-sm-5"> 
        {!! Form::submit($submitButtonText, array('class' => 'btn btn-warning')) !!}
    </div>
</div>