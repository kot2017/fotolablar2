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
    <p>Na tej witrynie znajdziesz liste producentow </p>

    <table>
        @foreach($producent as $p)
            <tr>
                <td>{{$p->ID}}</td>
                <td>{{$p-> nazwa}}</td>
                <td>{{$p-> link }}</td>
                <td><a href="{{url('/foto/producent/detail/'.$p->ID)}}">szczegóły</a></td>
                {{--                <td>{{$p-> opis }}</td>--}}
            </tr>
        @endforeach
    </table>


@endsection
