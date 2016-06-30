@extends('partials.layout')

@section('content')<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Pannello di Controllo</h2>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
        </div>
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.users') }}">
                <button type="button" class="btn btn-default btn-lg admin-panel-btn">
                    <span class="glyphicon glyphicon-user cf-green" aria-hidden="true"></span> Modifica utenti
                </button>
            </a>
        </div>
        
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('material.create') }}">
                <button type="button" class="btn btn-default btn-lg admin-panel-btn">
                    <span class="glyphicon glyphicon-book cf-green" aria-hidden="true"></span> Inserisci nuova documentazione
                </button>
            </a>
        </div>
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.materials') }}">
                <button type="button" class="btn btn-default btn-lg admin-panel-btn">
                    <span class="glyphicon glyphicon-wrench cf-green" aria-hidden="true"></span> Modifica documentazione
                </button>
            </a>       
        </div>
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('site-event.create') }}">
                <button type="button" class="btn btn-default btn-lg admin-panel-btn">
                    <span class="glyphicon glyphicon-calendar cf-green" aria-hidden="true"></span> Inserisci nuovo evento
                </button>
            </a>       
        </div>
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.site-events') }}">
                <button type="button" class="btn btn-default btn-lg admin-panel-btn">
                    <span class="glyphicon glyphicon-wrench cf-green" aria-hidden="true"></span> Modifica un evento
                </button>
            </a>       
        </div>
        <!--  @if (Auth::check() && (Auth::user()->profile_id == 1 | Auth::user()->profile_id == 2)) -->
        <!-- <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.mail-to-students') }}">
                <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-envelope cf-green" aria-hidden="true"></span> Manda una mail agli utenti
                </button>
            </a>       
        </div>
        <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.news') }}">
                <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-leaf cf-green" aria-hidden="true"></span> Inserisci una news riguardante il Master
                </button>
            </a>       
        </div> -->
        <!-- <div class="admin-button-margin col-lg-7">
            <a href="{{ URL::route('admin.mail-to-subscribers') }}">
                <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-envelope cf-red" aria-hidden="true"></span> Crea una mail per la newsletter
                </button>
            </a>       
        </div> -->
        <!-- @endif -->
        @if (Session::has('msg'))
        <div class="col-lg-7">
            {{ Session::get('msg') }}
        </div>
        @endif
    </div>
</div>
@endsection