@extends('partials.layout')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Users</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		   {!!Form::open(['url' => ['admin/users/edit'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}

			@foreach($users->chunk(3) as $user_group)
				<div class="row group-cards">
					@foreach($user_group as $user)
						<div class="col-md-4">
							<div class="card card-block" >
								<h4 class="card-title">{!! $user->name !!}</h4>
								<p class="card-text">{!! $user->email !!}</p>
								{!! Form::select('users[' . $user->id . '].role', $roles, $user->role->label, ['class' => 'form-control']); !!}
							</div>	
						</div>
					@endforeach
				</div>
			@endforeach

			<div class="form-group">        
			    <div class="col-md-5"> 
			        {!! Form::submit('Salva Modifiche', array('class' => 'btn btn-warning')) !!}
			    </div>
			</div>

			{!! Form::close() !!} 
		</div>
	</div>
</div>

@endsection