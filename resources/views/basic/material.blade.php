@extends('partials.layout')

@section('content')

<h1>{!! $material->title !!}</h1>


<p>{!! $material->body !!}</p>
<a href={!! route('material.edit', $material) !!} class="btn btn-info" role="button">Modifica</a>


@endsection