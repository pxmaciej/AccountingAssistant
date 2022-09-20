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
       <div class="col-lg-8">
        <h2 class="text-center">Księgowość</h2>
        <p class="lead" style="text-align: justify;">
            Nasza oferta obejmuje szereg usług skierowanych do przedsiębiorców, niezależnie od tego czy rozliczasz się z podatków na podstawie księgi przychodów i rozchodów, czy ewidencji ryczałtowej, nasza oferta jest właśnie dla Ciebie. W cenie prowadzenia ksiąg podatkowych zawarte jest również sporządzanie i wysyłka deklaracji ZUS w Twoim imieniu.
        </p>
        <p class="lead" style="text-align: justify;">
            Przepisy podatkowe stają się z roku na rok coraz bardziej skomplikowane, dlatego służymy pomocą wszystkim naszym klientom. Jeśli tego potrzebujesz, możesz skonsultować z nami wybór formy opodatkowania. Pomożemy również w rejestracji Twojej działalności, jeśli planujesz rozpocząć własny biznes i zdecydujesz się korzystać z naszych usług, konsultacje będą dla Ciebie bezpłatne.
        </p>
        <p class="lead" style="text-align: justify;">
            Zajmiemy się również Twoimi rozliczeniami z tytułu podatku VAT oraz wysyłaniem plików JPK i deklaracji do urzędu, jeśli jesteś czynnym podatnikiem tego podatku. Pomożemy również w rejestracji jako czynnego podatnika VAT, jeżeli się na to zdecydujesz lub będziesz do tego zobligowany przez przepisy.
        </p>
        <table class="table table-striped mt-5 mb-5">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Opis</th>
                <th scope="col">Cena</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Prowadzenie KPiR</td>
                <td>150 zł</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Prowadzenie KPiR i ewidencji VAT</td>
                <td>250 zł</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Prowadzenie ryczałtu ewidencjonowanego</td>
                <td>100 zł</td>
              </tr>
              <tr>
                  <th scope="row">4</th>
                  <td>Prowadzenie ryczałtu ewidencjonowanego i ewidencji VAT</td>
                  <td>200 zł</td>
                </tr>
            </tbody>
        </table>
       </div>
       <div class="col-lg-3">
        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-book-open m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
            <h3 class="mt-3 text-center">KSIĘGOWOŚĆ<br></h3>
            <ul>
                <li style="text-align: left;">Prowadzenie Podatkowej Księgi Przychodów i Rozchodów; Ewidencji Ryczałtowych</li>
                <li style="text-align: left;">Prowadzenie ewidencji środków trwałych oraz wartości niematerialnych i prawnych</li>
                <li style="text-align: left;">Prowadzenie ewidencji do celów rozliczeń z tytułu podatku VAT</li>
                <li style="text-align: left;">Rejestracja działalności gospodarczej</li>
                <li style="text-align: left;">Rozliczenia z ZUS</li>
            </ul>
        </div>
    </div>
    </div>
</div>
@endsection
