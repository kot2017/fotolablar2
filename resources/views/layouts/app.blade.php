<!-- Stored in resources/views/layouts/app.blade.php -->

<html>

<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>App Name - @yield('title')</title>


</head>


<body>

<div id="art-main">
    <header class="art-header">

        <div class="art-shapes">

        </div>

        <h1 class="art-headline">
            <a href="/">Wprowadź Tytuł Strony</a>
        </h1>
        <h2 class="art-slogan">Wprowadź Slogan Strony</h2>


        <nav class="art-nav">
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto') }}" class="active">Foto</a></li>
            </ul>
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto/producent') }}" class="active">Producenci</a></li>
            </ul>
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto/film') }}" class="active">Filmy</a></li>
            </ul>
            <ul class="art-hmenu">
                <li><a href="{{ URL::to('foto/chemikalia') }}" class="active">Chemikalia</a></li>
            </ul>
        </nav>


    </header>


    {{-- ]]]]]]]]]]]]]]]]]  --}}
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('child') }}">Child </a>
                </li>
            </ul>
        </div>
    </nav>
    @section('sidebar')
        This is the master sidebar.
    @show

    {{-- /////////////////////////////--}}

    <div class="art-sheet clearfix">
        <div class="art-layout-wrapper">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
                        <article class="art-post art-article">


                            <div class="art-postcontent art-postcontent-0 clearfix">
                                <div class="art-content-layout">
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
                                <div class="art-content-layout-wrapper layout-item-1">
                                    <div class="art-content-layout layout-item-2">
                                        <div class="art-content-layout-row">
                                            <div class="art-layout-cell layout-item-3" style="width: 100%">

                                                <h3 style="text-align: center;padding-bottom: 10px;border-bottom:2px solid #bdbdbd">
                                                    wywołania!</h3>

                                                <p style="text-align:left;"></p>


                                                <div
                                                    style="background-color:#D8D8D9; padding-left: 50px ; padding-right: 50px; padding-top: 40px">


                                                    <p style="text-align: left;">
                                                    @if(Session::has('message'))
                                                        <div class="alert alert-success">
                                                            {{Session::get('message')}}
                                                        </div>
                                                    @endif
                                                    @yield('content')

                                                    Fusce sociosqu faucibus inceptos suspendisse viverra. Lobortis ipsum
                                                    nunc

                                                    <p><a href="#" class="art-button">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--    /////////////////////// --}}
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        @yield('content')
    </div>
</div>
{{--<div class="container">--}}
{{--    @yield('content')--}}
{{--</div>--}}
</body>
</html>
