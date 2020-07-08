<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fotlab2-1</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{ URL::asset('css/simple-footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/untitled.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="#"><strong>FotLab2</strong></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Dane</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Wynik</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="promo">
    <div class="jumbotron">
        <h1>Fot Lab 2-1</h1>
        <p>experymenty z obróbką filmów analogowych</p>
        <p></p>
    </div>
</div>


<div id="div-dark" class="div-dark">
    <div class="container">
        @yield('content')

    </div>
</div>

{{--<div id="div-dark" class="div-dark">--}}
{{--    <div class="container site-section" id="welcome-1">--}}
{{--        <div class="table-responsive">--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Column 1</th>--}}
{{--                    <th>Column 2</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td>Cell 1</td>--}}
{{--                    <td>Cell 2</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Cell 3</td>--}}
{{--                    <td>Cell 4</td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <ul class="nav nav-pills card-header-pills">--}}
{{--                    <li class="nav-item border rounded shadow-sm"><a class="nav-link disabled active" href="#">Nowy</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#">Edycja</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#">Szczegóły</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <h4 class="card-title">Title</h4>--}}
{{--                <!-- Start: Simple Form -->--}}
{{--                <form method="post">--}}
{{--                    <!-- Start: Success Example -->--}}
{{--                    <div class="form-group"><input class="form-control" type="text" style="background-color:#E8F5FB;" name="name" placeholder="Uw voor- en achternaam"></div>--}}
{{--                    <!-- End: Success Example -->--}}
{{--                    <div class="form-group"><input class="form-control" type="text" style="background-color:#E8F5FB;" name="name" placeholder="Uw bedrijfsnaam">--}}
{{--                        <!-- Start: The Error Message --><small class="form-text" style="font-size:12px;">(Indien van toepassing)</small>--}}
{{--                        <!-- End: The Error Message -->--}}
{{--                    </div>--}}
{{--                    <div class="form-group"><input class="form-control" type="text" style="background-color:#E8F5FB;" name="name" placeholder="Uw e-mailadres">--}}
{{--                        <!-- Start: The Error Message --><small class="form-text">(U krijgt een bevestiging per mail)</small>--}}
{{--                        <!-- End: The Error Message -->--}}
{{--                    </div>--}}
{{--                    <div class="form-group"><input class="form-control" type="text" style="background-color:#E8F5FB;" name="name" placeholder="Uw telefoonnummer">--}}
{{--                        <!-- Start: The Error Message --><small class="form-text" style="font-size:12px;">(Wij gebruiken dit als wij vragen hebben)</small>--}}
{{--                        <!-- End: The Error Message -->--}}
{{--                    </div>--}}
{{--                    <div class="form-group"><textarea class="form-control" style="background-color:#E8F5FB;" name="message" placeholder="Uw bericht" rows="5"></textarea></div>--}}
{{--                    <div class="form-group">--}}
{{--                        <!-- Start: The Error Message --><small class="form-text d-inline" style="font-size:12px;">Wij beantwoorden uw bericht zo snel als mogelijk</small>--}}
{{--                        <!-- End: The Error Message --><button class="btn btn-primary btn-sm d-inline float-right" style="margin-top:0px;width:119px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;background-color:#E8F5FB;" type="submit">Verzenden</button></div>--}}
{{--                </form>--}}
{{--                <!-- End: Simple Form -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="container site-section" id="opis_tematu">
    <div class="row">
        <div class="col-4"><img src="{{ URL::asset('images/producenci.jpg') }}"></div>
        <div class="col">
            <h1>Producenci</h1>
            <p><br>Obecnie, w roku 2020 , kilku producentów którzy w poprzednich dekadach przodowali w wytwarzaniu
                filmów fotograficznych nadal produkuje swoje wyroby. Należy do nich Ilfor, Kodak, Agfa, Foma,
                Rollei.<br>Pojawiają się również firmy, które
                konfekcjonują i przygotowują do użytku fotograficznego&nbsp;taśmy&nbsp;kinowe.<br><br></p>
        </div>
    </div>
</div>


<!-- Start: simple footer -->
<div class="footer-2">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-6 col-md-6">
                <p class="text-left" style="margin-top:5%;margin-bottom:3%;">© 2020 Wojciech Leszczyński</p>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <p class="text-right" style="margin-top:5%;margin-bottom:8%;font-size:1em;">Privacy Policy</p>
            </div>
        </div>
    </div>
</div>
<!-- End: simple footer -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
