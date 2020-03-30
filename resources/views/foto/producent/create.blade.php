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

    <form method="post" action="{{ action('ProducentWebController@save') }}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <table>
            <div>
                <label for="nazwa">Nazwa producenta</label>
                <input type="text" class="form-control" id="producentNazwa" name="nazwa">
            </div>
            <div>
                <label for="link">Link</label>
                <input type="text" class="form-control" id="producentLink" name="link">
            </div>
            <div>
                <label for="opis">Opis producenta</label>
                <input type="textarea" class="form-control" id="producentOpis" name="opis">
            </div>
        </table>

    </form>



@stop
