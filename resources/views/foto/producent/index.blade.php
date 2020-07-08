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

    <table class="table table-striped">
        @foreach($producent as $p)
            <tr>
                <td>{{$p->ID}}</td>
                <td>{{$p-> nazwa}}</td>
                <td>{{$p-> link }}</td>
                <td><a href="{{url('/foto/producent/detail/'.$p->ID)}}">szczegóły</a></td>
                <td><a href="{{url('/foto/producent/edit/'.$p->ID)}}">edytuj</a></td>
                <td><a href='/foto/producent/delete/{{ $p->ID }}'>Delete</a></td>
                {{--                <form method="DELETE" action="{{ action('ProducentWebController@delete/'.$p->ID) }}">--}}
                {{--                <td><button type="submit" >usun</button>  </td>--}}
                {{--                 </form>--}}
                {{--                <td>{{$p-> opis }}</td>--}}
            </tr>
        @endforeach
    </table>


@endsection
