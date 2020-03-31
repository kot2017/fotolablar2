@extends('layouts.app')
@section('header')
    <h2>Producent</h2>
@endsection


@section('local_navbar')
    <div>
        <nav>
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto/producent/index') }}" class="active">lista</a></li>
            </ul>
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto/producent/create') }}" class="active">nowy</a></li>
            </ul>
        </nav>
    </div>
@endsection


@section('content')

    //==========


    <h1>Edycja {{$producent->nazwa}}</h1>

    <form method="POST" action="{{ action('ProducentWebController@update') }}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">"

        <div class="col">
            <div class="row">
                <label for="id">id</label>
            </div>
            <div class="row">
                <input type="text" class="form-control" id="idProducenta" name="id" value="{{$producent->ID}}">
            </div>
        </div>

        <div class="col">
            <div class="row">
                <label for="nazwa">Nazwa producenta</label>
            </div>
            <div class="row">
                <input type="text" class="form-control" id="producentNazwa" name="nazwa" value="{{$producent->nazwa}}">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="link">Link</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="producentLink" name="link" value="{{$producent->link}}">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="opis">Opis producenta</label>
            </div>
            <div class="col">
                <input type="text" rows="10" cols="50" class="form-control" id="producentOpis" name="opis"
                       value="{{$producent->opis}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit">zapisz</button>


            </div>
        </div>

    </form>

    //============
    <p class="lead"><a href="{{ URL::to('foto/producent/index') }}">Powrót do listy</a></p>
    <hr>
    //================


@endsection

