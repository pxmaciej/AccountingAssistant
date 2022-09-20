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
<div class="container">
    <div class="row my-5">
        <div class="col-lg-6">
            <div class="d-flex justify-content-center mb-1"><i class="fa fa-map-o" style="color: rgb(48,57,71);font-size:100px;"></i></div>
            <h1 class="mb-2 text-center">Kontakt</h1>
            <h3 class=" text-center"><strong>Biuro Rachunkowe <br>
                                 Dominik Kozłowski</strong></h3>
            <h4 class="mb-3 text-center">ul. Senatorska 48/8<br>59-220 Legnica<br>NIP:&nbsp;6912551566<br></h4>
                <h4 class="text-center">Telefon: kom.&nbsp;<a href="tel:+48666077573">666&nbsp;077&nbsp;573</a></h4>
                <h4 class="text-center">Email: <a href="mailto:biuro.rachunkowe.kozlowski@gmail.com">biuro.rachunkowe.kozlowski@gmail.com</a>
            </h4>
        </div>
        <div class="col-lg-6">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="min-height: 200px;">
                    <img class="d-block w-100" src={{ asset('/image/opinia1.png') }} alt="opinia 1">
                  </div>
                  <div class="carousel-item" style="min-height: 200px;">
                    <img class="d-block w-100" src={{ asset('/image/opinia2.png') }} alt="opinia 2">
                  </div>
                  <div class="carousel-item" style="min-height: 200px;">
                    <img class="d-block w-100" src={{ asset('/image/opinia3.png') }} alt="opinia 3">
                  </div>
                  <div class="carousel-item" style="min-height: 200px;">
                    <img class="d-block w-100" src={{ asset('/image/opinia4.png') }} alt="opinia 4">
                  </div>
                </div>
            </div>
            <h3 class="text-center mt-3">Obszar działań:</h3>
            <p class="text-center">Legnica, Chojnów, Złotoryja</p>
        </div>

    </div>
</div>
@endsection
