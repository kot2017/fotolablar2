@extends('layouts.app')
@section('header')
    <h2>Producent</h2>
@stop
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
    <p>formatka do wprowadzenia nowego producenta</p>
    <p>
        {{$message}}
    </p>

    <form method="POST" action="{{ action('ProducentWebController@save') }}" accept-charset="UTF-8">
        {{ csrf_field() }}


        <div class="col">
            <div class="row">
                <label for="nazwa">Nazwa producenta</label>
            </div>
            <div class="row">
                <input type="text" class="form-control" id="producentNazwa" name="nazwa">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="link">Link</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="producentLink" name="link">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="opis">Opis producenta</label>
            </div>
            <div class="col">
                <input type="text" rows="10" cols="50" class="form-control" id="producentOpis" name="opis">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit">zapisz</button>


            </div>
        </div>

    </form>




@stop
