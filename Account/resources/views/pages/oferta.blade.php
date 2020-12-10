@extends('layouts.app')
@section('content')
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
</table>
</div>

@endsection