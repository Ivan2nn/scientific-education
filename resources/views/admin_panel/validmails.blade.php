@extends('partials.layout')

@section('content')

<h1>Valid Mails Page</h1>

@foreach($validMails as $validMail)
	
	<div class="" ><span>{{{ $validMail->fullname }}}</span></div>
	<div class="">{{{ $validMail->email }}}</div>
		
@endforeach


 <h2>New Valid Mail</h2>

{!! Form::open(['url' => 'valid-mails']) !!}
	 <div class="form-group">
        {!! Form::label('fullname','Nome e Cognome',array('class' => 'control-label admin-form col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::text('fullname','',array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('email','Email',array('class' => 'control-label admin-form col-sm-2')) !!}
        <div class="col-sm-5">
            {!! Form::text('email','',array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
		{!! Form::submit('Aggiungi una mail valida', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

@endsection