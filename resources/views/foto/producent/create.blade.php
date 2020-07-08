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

    <div class="container">
        <div class="row-cols-8">
            <form method="POST" action="{{ action('ProducentWebController@save') }}" accept-charset="UTF-8">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="nazwa" class="col-sm-3 col-form-label">Nazwa producenta</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="producentNazwa" name="nazwa">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="link" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="producentLink" name="link">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="opis" class="col-sm-3 col-form-label">Opis producenta</label>
                    <div class="col-sm-5">
                        <input type="text" rows="10" cols="50" class="form-control" id="producentOpis" name="opis">
                    </div>

                </div>
                <button type="submit">zapisz</button>

            </form>
        </div>
    </div>


@stop
