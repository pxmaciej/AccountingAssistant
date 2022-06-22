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
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-book-open m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
                    <h3 class="mt-3">RACHUNKOWOŚĆ<br></h3>
                    <ul>
                        <li style="text-align: left;">Prowadzenie Podatkowej Księgi Przychodów i Rozchodów; Ewidencji Ryczałtowych</li>
                        <li style="text-align: left;">Prowadzenie ewidencji środków trwałych oraz wartości niematerialnych i prawnych</li>
                        <li style="text-align: left;">Prowadzenie ewidencji do celów rozliczeń z tytułu podatku VAT</li>
                        <li style="text-align: left;">Rejestracja działalności gospodarczej</li>
                        <li style="text-align: left;">Rozliczenia z ZUS właścicieli firmy</li>
                        <li style="text-align: left;">Załatwianie spraw z zakresu ZUS z wykorzystaniem usług dostępnych elektronicznie na platformie ZUS PUE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-calculator m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
                    <h3 class="mt-3">PODATKI<br></h3>
                    <ul>
                        <li style="text-align: left;">Obliczanie wysokości należnych podatków dochodowych w ujęciu okresowym (zaliczki miesięczne/kwartalne)</li>
                        <li style="text-align: left;">Obliczanie i sporządzanie zobowiązań/należność z tytułu rozliczeń podatku VAT</li>
                        <li style="text-align: left;">Sporządzanie rocznych rozliczeń z tytułu uzyskiwanych dochodów osób fizycznych z działalności gospodarczej (w tym dochody z tytułu pracy, umów cywilnoprawnych) oraz deklaracji/formularzy podatkowych</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-briefcase m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
                    <h3 class="mt-3">KADRY I PŁACE<br></h3>
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
            <div class="col-lg-3">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-cloud-upload m-auto" style="color: rgb(48,57,71);font-size:100px;"></i></div>
                    <h3 class="mt-2">KSIĘGOWOŚĆ<br>ONLINE<br></h3>
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
</section>
<section class="showcase mb-3">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 mb-3 d-flex justify-content-center"><img src="{{ asset('/image/multitask.png') }}" class="img-fluid" alt="Multitasking"></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-lg-5">
                <div class="p-lg-5">
                    <h2>Nasze Biuro Rachunkowe Oferuje</h2>
                    <p class="lead text-justify" >Bardzo poszukiwany przez klientów wgląd do wszystkich danych on-line. Zapewniamy stały i bezpieczny dostęp do danych księgowych oraz skanów dokumentów on-line. Dzięki księgowości on-line cały czas na bieżąco możesz monitorować stan
                        zobowiązań i należności, a także poziom kosztów i przychodów.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 mb-3 d-flex justify-content-center" ><img src="{{ asset('/image/workplace.png') }}" class="img-fluid" alt="Multitasking"></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-lg-5 ">
                <div class="p-lg-5">
                   <h2>Księgowość uproszczona on-line<br></h2>
                    <p class="lead text-justify" >Każdemu klientowi udostępniamy bezpłatnie aplikację do wystawiania faktur sprzedażowych on-line. Aplikacja ta pozwala wystawić fakturę sprzedaży, a także ją wydrukować lub wysłać bezpośrednio do odbiorcy. Na dedykowanym panelu
                    klienta można zobaczyć skany wszystkich zaksięgowanych faktur kosztowych i zakupowych. Panel dla klienta umożliwia też kontrolowanie zobowiązań i należności oraz prowadzenie kasy gotówkowej. Informację o podatkach umieszczamy
                    na panelu klienta, wysyłamy powiadomienie sms oraz tradycyjnie e-mailem.</p>
                </div>

            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 mb-3 d-flex justify-content-center"><img src="{{ asset('/image/office.png') }}" class="img-fluid" alt="Multitasking"></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-lg-5 ">
                <div class="p-lg-5">
                    <h2>Księgowość uproszczona tradycyjna<br></h2>
                <p class="lead text-justify" >Odbieramy w biurze lub możliwy jest przyjazd po faktury do firmy w Legnicy i okolicach (dodatkowa płatność). Wszystkie wiadomości dotyczące zobowiązań podatkowych przekazujemy e-mailem lub SMS.</p>
                </div>

            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 mb-3 d-flex justify-content-center"><img src="{{ asset('/image/audit.png') }}" class="img-fluid" alt="Multitasking"></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-lg-5 ">
                <div class="p-lg-5">
                 <h2 id="onas">O nas<br></h2>
                <p class="lead text-justify" >Jesteśmy młodym zespołem, stawiającym na nowoczesne rozwiązania.
                    W naszej pracy kładziemy nacisk na efektywność i szybkość działania.
                    Szanujemy czas naszego klienta, dlatego staramy się zminimalizować potrzebę
                    bezpośredniego dostarczania przez niego dokumentów do minimum i komunikacji twarzą
                    w twarz na rzecz komunikacji elektronicznej. Nasze biuro rachunkowe oferuje, bardzo
                     poszukiwany przez klientów, wgląd do wszystkich danych on-line.
                     Zapewniamy stały i bezpieczny dostęp do danych księgowych oraz skanów dokumentów on-line.
                      Pozwala to klientom na bieżąco monitorować
                     stan zobowiązań i należności, a także poziom swoich przychodów i kosztów, oraz wszelkich rozliczeń.</p>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
