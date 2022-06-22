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
       <div class="col-lg-6 pt-5">
        <h2 class="text-center">Kadry i płace</h2>
        <p class="lead" style="text-align: justify;">
            Jeśli zatrudniasz pracowników na umowę o pracę lub na podstawie umów zlecenia lub o dzieło, ciąży na Tobie szereg obowiązków, od rejestracji pracownika do ZUS, naliczenia wynagrodzenia, po potrącenie podatku i składek społecznych od wypłaty oraz odprowadzenie ich do urzędu. Zajmiemy się dla Ciebie wszystkim z powyższych, niezależnie ilu zatrudniasz pracowników.
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
            <th scope="row">5</th>
            <td>Obsługa kadrowo-płacowa pracowników</td>
            <td>40 zł</td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Obsługa kadrowo-płacowa umów zlecenie i umów o dzieło</td>
            <td>30 zł</td>
            </tr>
            </tbody>
        </table>
       </div>
       <div class="col-lg-6">
        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
            <div class="d-flex features-icons-icon"><i class="icon-briefcase m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
            <h3 class="mt-3 text-center">KADRY I PŁACE<br></h3>
        </div>
        <ul>
            <li style="text-align: left;">Sporządzanie umów o pracę i umów cywilnoprawnych</li>
            <li style="text-align: left;">Sporządzanie miesięcznych list płac</li>
            <li style="text-align: left;">Rozliczanie miesięcznych zaliczek z tytułu podatku dochodowego pracowników</li>
            <li style="text-align: left;">Sporządzenie rozliczeń rocznych dla pracowników/zleceniobiorców (PIT-11/PIT-37/PIT-36)</li>
            <li style="text-align: left;">Wystawianie świadectw pracy, zaświadczeń o dochodach, zatrudnieniu</li>
            <li style="text-align: left;">Obsługa ZUS (naliczanie składek, sporządzanie deklaracji, zgłoszenia oraz wyrejestrowania pracowników)</li>

        </ul>
    </div>
    </div>
</div>
@endsection