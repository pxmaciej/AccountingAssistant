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
    <h1 class="mt-5 mb-2" style="text-align:center">Polityka prywatności</h1>
    <p class="mb-5">Polityka prywatności serwisu www.mojaksiegowosc.com<br>
    1.	Informacje ogólne <br>
    Niniejsza Polityka Prywatności określa zasady przetwarzania i ochrony danych osobowych przekazanych przez Użytkowników poprzez niniejszy serwis.<br>
    2. Administratorem danych osobowych zawartych w serwisie jest <br>
    <strong>Rachunkowe Dominik Kozłowski  z siedzibą w Legnicy </strong><br>
    <strong>NIP 6912551566 	REGON 387495600</strong><br>
    3. W trosce o bezpieczeństwo powierzonych nam danych opracowaliśmy wewnętrzne procedury i zalecenia, które mają zapobiec udostępnieniu danych osobom nieupoważnionym. Kontrolujemy ich wykonywanie i stale sprawdzamy ich zgodność z odpowiednimi aktami prawnymi - ustawą o ochronie danych osobowych, ustawą o świadczeniu usług drogą elektroniczną, a także wszelkiego rodzaju aktach wykonawczych i aktach prawa wspólnotowego.<br>
    4. Dane Osobowe przetwarzane są na podstawie zgody wyrażanej przez Użytkownika oraz w przypadkach, w których przepisy prawa upoważniają Administratora do przetwarzania danych osobowych na podstawie przepisów prawa lub w celu realizacji zawartej pomiędzy stronami umowy.<br>
    5. Serwis realizuje funkcje pozyskiwania informacji o użytkownikach w następujący sposób: <br>
    - poprzez dobrowolnie wprowadzone w formularzach informacje<br>
    6. Serwis zbiera informacje dobrowolnie podane przez użytkownika.<br>
    7. Dane podane w formularzu są przetwarzane w celu wynikającym z funkcji konkretnego formularza np. w celu dokonania procesu obsługi kontaktu informacyjnego
    8. Dane osobowe pozostawione w serwisie nie zostaną sprzedane ani udostępnione osobom trzecim, zgodnie z przepisami Ustawy o ochronie danych osobowych. <br>
    9. Do danych zawartych w formularzu przysługuje wgląd osobie fizycznej, która je tam umieściła. Osoba ta ma również prawo do modyfikacji i zaprzestania przetwarzania swoich danych w dowolnym momencie.<br>
    10. Zastrzegamy sobie prawo do zmiany w polityce ochrony prywatności serwisu, na które może wpłynąć rozwój technologii internetowej, ewentualne zmiany prawa w zakresie ochrony danych osobowych oraz rozwój naszego serwisu internetowego. O wszelkich zmianach będziemy informować w sposób widoczny i zrozumiały.<br>
    11. W Serwisie mogą pojawiać się linki do innych stron internetowych. Takie strony internetowe działają niezależnie od Serwisu i nie są w żaden sposób nadzorowane przez serwis www.mojaksiegowosc.com. Strony te mogą posiadać własne polityki dotyczące prywatności oraz regulaminy, z którymi zalecamy się zapoznać.<br>
    W razie wątpliwości co któregokolwiek z zapisów niniejszej polityki prywatności jesteśmy do dyspozycji - nasze dane znaleźć można w zakładce - KONTAKT.
 </p>
</div>
@endsection
