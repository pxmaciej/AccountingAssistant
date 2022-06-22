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
    <table class="table table-striped mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Opis</th>
      <th scope="col">Pierwszy miesiąc</th>
      <th scope="col">Następne</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Prowadzenie uproszczonej księgowości dla celów podatkowych</td>
      <td>100 zł</td>
      <td>150 zł</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Prowadzenie ewidencji VAT </td>
      <td>200 zł</td>
      <td>250 zł</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Prowadzenie ryczałtu ewidencjonowanego</td>
      <td>80 zł</td>
      <td>100 zł</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Prowadzenie ryczałtu ewidencjonowanego i ewidencji VAT</td>
        <td>150 zł</td>
        <td>200 zł</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Obsługa płacowa i/lub kadrowa pracowników</td>
        <td>30 zł</td>
        <td>30 zł</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Rozliczanie umów cywilnoprawnych</td>
        <td>30 zł</td>
        <td>30 zł</td>
      </tr>
  </tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>(zależne od ilości faktur)</td>
    </tr>
</table>
</div>

@endsection
