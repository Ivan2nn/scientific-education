@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12">                    
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Login</h3>
                        <p>Inserisci la mail e la password per accedere</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-lock fa-primary-color"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="form-email">E-Mail Address</label>
                            <input type="text" name="email" placeholder="Email..." class="form-username form-control input-special-form" id="form-email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control input-special-form" id="form-password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-special-form">Login</button>
                        <a class="btn btn-link form-login-forget btn-special-form" href="{{ url('/password/reset') }}">Hai dimenticato la password?</a>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-2 col-sm-2 col-xs-12 middle-border"></div>
            
        <div class="ccol-md-5 col-sm-5 col-xs-12">
            <div class="form-top to-register">
                <div class="form-top-left">
                    <h2>{!! link_to('register', $title = 'Registrati', $parameters = array(), $attributes = array()); !!}</h2>
                </div>
                <div class="form-top-right">
                    <i class="fa fa-pencil fa-primary-color"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
