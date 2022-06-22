@extends('layouts.app')
@section('content')
<div class="jarallax">
    <header class="my-5 text-white text-center jarallax-img" style="background: url({{ URL::asset('image/baner.jpg') }});background-size: cover; background-attachment: fixed;">
        <div class="mask rgba-gradient align-items-center">
        <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 mx-auto m-5 justify-content-lg-center">
                        <h1 class="headertext mb-2 text-justify">Naszą ofertę kierujemy do osób prowadzących działalność gospodarczą, rozliczających się z podatku za pomocą księgi przychodów lub ewidencji ryczałtowej</h1>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mb-5">
                            <form>
                                <div class="form-row">
                                    <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Wpisz email"></div>
                                    <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg mb-3" type="Sign-up">Zapisz się!</button></div>
                                </div>
                            </form>
                        </div>
                </div>
        </div>
    </header>
</div>
<div class="continer">
    <div class="row my-5 mx-auto">
       <div class="col-lg-8 pt-5">
        <h2 class="text-center">Księgowość ONLINE</h2>
        <p class="lead" style="text-align: justify;">     
            Udostępniamy naszym klientom przystępny panel klienta, który umożliwi Ci jeszcze łatwiejszą komunikację z nami oraz śledzenie Twojej księgowości online. W każdej chwili możesz sprawdzić swoje aktualne zobowiązania podatkowe czy podsumowania księgi przychodów i rozchodów w danym okresie.
        </p>
         
       </div>
       <div class="col-lg-3">
        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-cloud-upload m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
            <h3 class="mt-2 text-center">KSIĘGOWOŚĆ<br>ONLINE<br></h3>
        </div>
        <ul>
            <li style="text-align: left;">Panel klienta</li>
            <li style="text-align: left;">Możliwość dostarczania dokumentów w formie elektronicznej</li>
            <li style="text-align: left;">Możliwość wystawiania faktur i innych dokumentów w systemie</li>
            <li style="text-align: left;">Stały dostęp do danych finansowych firmy</li>
            <li style="text-align: left;">Możliwość samodzielnego monitoringu płatności wobec US i ZUS</li>
        </ul>
    </div>
    </div>
</div>
@endsection