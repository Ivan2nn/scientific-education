@extends ('partials.layout')

@section('content')

<h1>New Material</h1>
    {!!Form::model($material, ['route' => ['material.update', $material], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH',  'files' => true]) !!}

    
    @include('admin_panel.partials.material_form',['submitButtonText' => 'Modifica il materiale', 'editMaterial' => true]);

    {!! Form::close() !!} 

@endsection