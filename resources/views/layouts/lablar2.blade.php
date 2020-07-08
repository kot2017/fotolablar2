<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fotlab2</title>

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
        <h1>Fot Lab 2</h1>
        <p>experymenty z obróbką filmów analogowych</p>
        <p></p>
    </div>
</div>
<div class="container site-section" id="why">
    <h1>analog żyje!</h1>
    <p>Prezentuję tutaj moje doświadczenia z wywoływaniem filmów analogowych.<br>Kilku producentów nadal produkuje filmy
        perforowane 35mm dl apotrzeb kinematografii, lotnictwa, rejestratorów i fotografii.&nbsp;<br>Wprawdzie film
        analogowy przenosi mniej
        informacji niż nowoczesne kamery cyfrowe, to do wielu zastosowań ta ilość informacji jest wystarczająca.
        Dodatkową cechą wyróżniającą zdjęcia analogowe jest ich sposób archiwizacji, niezależny od urządzeń
        technicznych.</p>
</div>
<div id="div-dark" class="div-dark">
    <div class="container site-section" id="welcome-1">
        <div class="row">
            <div class="col-4">


                <h2>Producenci</h2><img class="img-fluid" src="{{ URL::asset('images/producenci.jpg') }}">
                <p class="text-center col-md4 item">Obecnie, w roku 2020 , kilku producentów którzy w poprzednich
                    dekadach przodowali w wytwarzaniu filmów fotograficznych nadal produkuje swoje wyroby. Należy do
                    nich Ilfor, Kodak, Agfa, Foma, Rollei.<br><br>Pojawiają się również firmy,
                    które konfekcjonują i przygotowują do użytku fotograficznego&nbsp;taśmy&nbsp;kinowe.</p>
            </div>
            <div class="col-4">
                <h2>Filmy</h2><img src="{{ URL::asset('images/filmy.jpg') }}">
                <p class="col-md4 item">Dostępne filmy są wyższej jakości i o lepszych parametrach niż te wytwarzane
                    przed pojawieniem się fotografii cyfrowej. Dostępne są również filmy produkowane w&nbsp;poprzednich
                    latach dla potrzeb kinematografii. Filmy te, nawet przeterminowane
                    o kilkanaście lat, po odpoiwedniej obróbce dają zaskakująco dobre rezultaty.<br><br>Pojawiają się
                    również firmy, które konfekcjonują i przygotowują do użytku fotograficznego&nbsp;taśmy&nbsp;kinowe.
                </p>
            </div>
            <div class="col-4">
                <h2>Chemikalia</h2><img src="{{ URL::asset('images/chemikalia.jpg') }}">
                <p class="col-md4 item">Obróka filmów analogowych polega na wzmocnieniu zaczernienia emulsji srebrowej.
                    Robi się to poprzez zastosowanie odpowednich chemikaliów. Producenci filmów oraz inni producenci
                    chemii nadal wytwarzają odczynniki potrzebne do obróbki
                    filmów - wywoływacze, utrwalacze. Poza tym możliwe jest samodzielne zestawianie tych kąpieli na
                    podstawie publikowanych receptur, a potrzebne składniki można nabyć w sklepach chemicznych. <br><br>Pojawiają
                    się również firmy, które
                    konfekcjonują i przygotowują do użytku fotograficznego&nbsp;taśmy&nbsp;kinowe.</p>
            </div>
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
                <p class="text-right" style="margin-top:5%; margin-bottom:8% ;font-size:1em;">Privacy Policy</p>
            </div>
        </div>
    </div>
</div>
<!-- End: simple footer -->

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
