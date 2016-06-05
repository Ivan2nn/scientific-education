@extends ('partials.layout')

@section('content')

<h1>New Material</h1>
    
    {!! Form::open(array('url'=>'material', 'files' => true, 'class' => 'form-horizontal')) !!}
    
    @include('admin_panel.partials.material_form',['submitButtonText' => 'Inserisci il materiale', 'editMaterial' => false]);
    
    {!! Form::close() !!} 

@endsection