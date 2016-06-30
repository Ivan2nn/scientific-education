@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">      
        <div class="col-sm-5">
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Registrati</h3>
                        <p>Riempi i campi e registrati:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil fa-primary-color"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form class="registration-form" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">Nome Cognome</label>
                            <input type="text" placeholder="Nome Cognome..." class="form-first-name form-control input-special-form" id="form-first-name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" placeholder="Email..." class="form-email form-control input-special-form" id="form-email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-last-name form-control input-special-form" id="form-password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group">
                            <label class="sr-only" for="form-password-confirmation">Conferma Password...</label>
                            <input type="password" name="password_confirmation" placeholder="Conferma Password..." class="form-last-name form-control input-special-form" id="form-password-confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-special-form">Registrami!</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
