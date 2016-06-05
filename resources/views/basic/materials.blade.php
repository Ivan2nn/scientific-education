@extends('partials.layout')

@section('content')

<h1>Material List</h1>

@foreach ($materials as $material)
	<a href={!! route('material.show', $material) !!}>{!! $material->title !!}</p>
@endforeach

@endsection