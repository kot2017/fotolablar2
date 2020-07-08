<!-- Stored in resources/views/layouts/app.blade.php -->

<html>

<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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
{{--</div>--}}


{{-- /////////////////////////////--}}

    <div class="art-sheet clearfix">
        <div class="art-layout-wrapper">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
                        <article class="art-post art-article">


                            <div class="art-postcontent art-postcontent-0 clearfix">

                                @yield('obrazki')


                                <div class="art-content-layout-wrapper layout-item-1">
                                    <hr>
                                    <h3 style="text-align: center;padding-bottom: 10px;border-bottom:2px solid #bdbdbd">
                                        {{$tytul ?? ''}}</h3>


                                    <div class="art-content-layout layout-item-2">
                                        <div style="background-color: #850A21">
                                            @yield('local_navbar')
                                        </div>
                                        <div class="art-content-layout-row">
                                            <div class="art-layout-cell layout-item-3" style="width: 100%">


                                                <p style="text-align:left;"></p>


                                                <div
                                                    style="background-color:#D8D8D9; padding-left: 50px ; padding-right: 50px; padding-top: 1px">


                                                    <p style="text-align: left;">
                                                    @if(Session::has('message'))
                                                        <div class="alert alert-success">
                                                            {{Session::get('message')}}
                                                        </div>
                                                    @endif

                                                    <div class="container">
                                                        @yield('content')

                                                    </div>


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

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>
