@extends('layouts.app')
@section('content')
<section class="features-icons bg-light text-center mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                    <div class="d-flex features-icons-icon"><i class="icon-book-open m-auto" data-bs-hover-animate="pulse" style="color: rgb(48,57,71);font-size:100px;"></i></div>
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
                    <div class="d-flex features-icons-icon"><i class="icon-calculator m-auto" data-bs-hover-animate="pulse" style="color: rgb(48,57,71);font-size:100px;"></i></div>
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
                    <div class="d-flex features-icons-icon"><i class="icon-briefcase m-auto" data-bs-hover-animate="pulse" style="color: rgb(48,57,71);font-size:100px;"></i></div>
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
                    <div class="d-flex features-icons-icon"><i class="icon-cloud-upload m-auto" data-bs-hover-animate="pulse" style="color: rgb(48,57,71);font-size:100px;"></i></div>
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
<section class="showcase">
    <div class="container-fluid p-4">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background: url({{ URL::asset('/image/multitask.png') }}) no-repeat; background-position:center;min-height:30em; "><span></span></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-5">
                <h2>Nasze Biuro Rachunkowe Oferuje</h2>
                <p class="lead mb-0">Bardzo poszukiwany przez klientów wgląd do wszystkich danych on-line. Zapewniamy stały i bezpieczny dostęp do danych księgowych oraz skanów dokumentów on-line. Dzięki księgowości on-line cały czas na bieżąco możesz monitorować stan
                    zobowiązań i należności, a także poziom kosztów i przychodów.</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background: url({{ URL::asset('/image/workplace.png') }})no-repeat;background-position:center;min-height:30em;"><span></span></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-5">
                <h2>Księgowość uproszczona on-line<br></h2>
                <p class="lead mb-0">każdemu klientowi udostępniamy bezpłatnie aplikację do wystawiania faktur sprzedażowych on-line. Aplikacja ta pozwala wystawić fakturę sprzedaży, a także ją wydrukować lub wysłać bezpośrednio do odbiorcy. Na dedykowanym panelu
                    klienta można zobaczyć skany wszystkich zaksięgowanych faktur kosztowych i zakupowych. Panel dla klienta umożliwia też kontrolowanie zobowiązań i należności oraz prowadzenie kasy gotówkowej. Informację o podatkach umieszczamy
                    na panelu klienta, wysyłamy powiadomienie sms oraz tradycyjnie e-mailem.</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background: url({{ URL::asset('/image/office.png') }})no-repeat;background-position:center;min-height:30em;"><span></span></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-5">
                <h2>Księgowość uproszczona tradycyjna<br></h2>
                <p class="lead mb-0">odbieramy w biurze lub możliwy jest przyjazd po faktury do firmy w Legnicy i okolicach (dodatkowa płatność). Wszystkie wiadomości dotyczące zobowiązań podatkowych przekazujemy e-mailem lub SMS.</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background: url({{ URL::asset('/image/audit.png') }})no-repeat;background-position:center;min-height:30em;"><span></span></div>
            <div class="col-lg-6 my-auto order-lg-1 showcase-text p-5">
                <h2 id="onas">O nas<br></h2>
                <p class="lead mb-0">Jesteśmy młodym zespołem, stawiającym na nowoczesne rozwiązania. 
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
</section>

@endsection