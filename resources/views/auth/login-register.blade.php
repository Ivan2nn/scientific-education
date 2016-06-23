@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-5">                    
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Login</h3>
                        <p>Inserisci la mail e la password per accedere</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="form-email">E-Mail Address</label>
                            <input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
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
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a class="btn btn-link form-login-forget" href="{{ url('/password/reset') }}">Hai dimenticato la password?</a>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-sm-1 middle-border"></div>
        <div class="col-sm-1"></div>
            
        <div class="col-sm-5">
            
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Registrati</h3>
                        <p>Riempi i campi e registrati:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form class="registration-form" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">Nome Cognome</label>
                            <input type="text" placeholder="Nome Cognome..." class="form-first-name form-control" id="form-first-name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" placeholder="Email..." class="form-email form-control" id="form-email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-last-name form-control" id="form-password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group">
                            <label class="sr-only" for="form-password-confirmation">Conferma Password...</label>
                            <input type="password" name="password_confirmation" placeholder="Conferma Password..." class="form-last-name form-control" id="form-password-confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn">Registrami!</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
