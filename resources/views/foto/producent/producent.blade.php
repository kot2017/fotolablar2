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


    <div>
        <p>Na tej witrynie znajdziesz liste producentow </p>
    </div>
    <table>
        <tr>
            <td>bewouweyo</td>
        </tr>
    </table>
@endsection
