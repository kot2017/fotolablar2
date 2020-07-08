@extends('layouts.lablar21')


@section('content')

    <div class="container site-section" id="welcome-1">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
                </thead>

                <tbody>
                @foreach($producenci  as $p)
                    <tr>
                        <td>{{$p->ID}}</td>
                        <td><a href="{{url('/foto/producent/detail/'.$p->ID)}}">{{$p-> nazwa}}</td>
                        <td>{{$p-> link }}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item border rounded shadow-sm"><a class="nav-link disabled active" href="#">Nowy</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Edycja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Szczegóły</a></li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <!-- Start: Simple Form -->
                <form method="post">

                    {{--                        <div class="form-group"><input class="form-control" type="text" style="background-color:#E8F5FB;" name="id" placeholder="id"  value="{{$producent->ID}}"></div>--}}

                    <div class="form-group">
                        <input class="form-control" type="text" style="background-color:#E8F5FB;" name="name"
                               placeholder="nazwa" value="{{$producent->nazwa}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" style="background-color:#E8F5FB;" name="opis"
                               placeholder="opis" value="{{$producent->opis}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" style="background-color:#E8F5FB;" name="link"
                               placeholder="link" value="{{$producent->link}}">
                    </div>


                </form>
                <!-- End: Simple Form -->
            </div>
        </div>
    </div>

    //================

    <div>
        <p>Na tej witrynie znajdziesz liste producentow </p>
    </div>
    <table>
        <tr>
            <td>bewouweyo</td>
        </tr>
    </table>
@endsection

