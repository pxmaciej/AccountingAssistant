@extends('layouts.app')
@section('content')
<div class="jarallax">
    <header class="my-5 text-white text-center jarallax-img" style="background: url({{ URL::asset('image/baner.jpg') }});background-size: cover; background-attachment: fixed;">
        <div class="mask rgba-gradient align-items-center">
        <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 mx-auto m-5 justify-content-lg-center">
                        <h1 class="headertext mb-2 text-justify">Usługę księgowości uproszczonej kierujemy do małych firm, zobligowanych do prowadzenia księgi
                            przychodów i rozchodów lub ewidencji na potrzeby podatku ryczałtowego od przychodów ewidencjonowanych.</h1>
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
    <div class="row mb-5 mt-5">
        <div class="col-sm-6">
            <div class="d-flex features-icons-icon mb-1"><i class="fa fa-map-o" style="color: rgb(48,57,71);font-size:100px;"></i></div>
            <h1 class="mb-2">Kontakt</h1>
            <h3 class=""><strong>Biuro Rachunkowe <br>
                                 Dominik Kozłowski</strong></h3>
            <h4 class="mb-3">ul. Senatorska 48/8<br>59-220 Legnica<br>NIP:&nbsp;6912551566<br></h4>
            <h4>Telefon:<br></h4>
                <h4>kom.&nbsp;<a href="tel:+48666077573">666&nbsp;077&nbsp;573<br></a></h4>
               <h4> Email:</h4>
                <h4><a href="mailto:biuro.rachunkowe.kozlowski@gmail.com">biuro.rachunkowe.kozlowski@gmail.com</a>
            </h4>
        </div>
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1001.5262628895273!2d16.14887401754086!3d51.20969815604743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f1292f4c8f451%3A0xb8aded41d918270f!2sSenatorska%2048%2C%2059-220%20Legnica!5e0!3m2!1spl!2spl!4v1607627051090!5m2!1spl!2spl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
@endsection
