@extends('layouts.app')







@section('header')
    <h2>Foto</h2>
@stop


@section('obrazki')
    <div id="obrazki" class="art-content-layout">
        <div class="art-content-layout-row">
            <div class="art-layout-cell layout-item-0" style="width: 33%">
                <h3 style="text-align: center;padding-bottom: 10px;border-bottom:2px solid #bdbdbd">
                    producenci</h3>
                <p>


                </p>
                <p>&nbsp;&nbsp;</p>
                <p>
                    <img width="200" height="200" alt="" class="art-lightbox"
                         src="{{ URL::asset('images/pr.jpg') }}">
                    <br></p>
                <p>curabitur massa mattis ipsum sed sem ut neque quam. Vestibulum etiam
                    risus fusce aliquet curabitur ac a convallis urna a et sed id lobortis
                    sed vel vitae.</p>
                <p><a href="#" class="art-button">Learn more</a></p>
            </div>
            <div class="art-layout-cell layout-item-0" style="width: 34%">

                <h3 style="text-align: center;padding-bottom: 10px;border-bottom:2px solid #bdbdbd">
                    filmy</h3>
                <p><br></p>
                <p>
                    <img width="200" height="200" alt="" class="art-lightbox"
                         src="{{ URL::asset('images/f.jpg') }}"><br></p>
                <p>


                </p>
                <p>Sem tristique turpis elementum tellus luctus libero augue pede fusce diam
                    hymenaeos morbi pulvinar hendrerit. Condimentum sapien metus sagittis
                    quam.</p>
                <p><a href="#" class="art-button">Learn more</a></p>
            </div>
            <div class="art-layout-cell layout-item-0" style="width: 33%">
                <h3 style="text-align: center;padding-bottom: 10px;border-bottom:2px solid #bdbdbd">
                    wywoływacze</h3>
                <p><br></p>
                <p>
                    <img width="200" height="200" alt="" class="art-lightbox"
                         src="{{ URL::asset('images/w.jpg') }}"><br></p>
                <p>


                </p>
                <p>Nunc quis magna proin posuere ad in. Cubilia viverra tempus. Nullam eget
                    habitant dui erat posuere turpis tincidunt quis justo vitae et.</p>
                <p><a href="#" class="art-button">Learn more</a></p>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <p>Na tej witrynie znajdziesz wywoływania filmów</p>
@stop
