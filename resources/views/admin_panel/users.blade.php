@extends ('partials.layout')

@section('content')

<h1>Users</h1>
   {!!Form::open(['url' => ['admin/users/edit'], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

	@foreach($users as $user)
    	<div class="form-group">
    		<div class="list-user-element">{!! $user->name !!}</div>
    		<div class="list-user-email">{!! $user->email !!}</div>
    		<div class="col-sm-5">
    		{!! $roles !!}
    			   {!! $user->role->label !!}
        		{!! Form::select('roles', $roles, $user->role->label, ['class' => 'form-control']); !!}
    		</div>
		</div>
	@endforeach

	<div class="form-group">        
	    <div class="col-sm-offset-2 col-sm-5"> 
	        {!! Form::submit('Salva Modifiche', array('class' => 'btn btn-warning')) !!}
	    </div>
	</div>

	{!! Form::close() !!} 

@endsection