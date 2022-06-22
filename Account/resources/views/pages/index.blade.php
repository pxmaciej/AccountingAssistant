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

<section class="features-icons bg-light text-center">
    <div class="container">
            <h1>Biuro rachunkowe Legnica</h1>
            <p class="lead" style="text-align: justify;">Biuro Rachunkowe Dominika Kozłowskiego prowadzi działalność w Legnicy od 2020 roku. Chociaż jesteśmy
        młodą firmą na lokalnym rynku, nasz zespół tworzą doświadczeni specjaliści o szerokich kompetencjach.
        Wykwalifikowani eksperci z zakresu księgowości, podatków oraz prawa pracy, mają doświadczenie w
        różnorodnych obszarach i nie tylko wykazują biegłą znajomość przepisów, ale również ich interpretacji. Naszym
        klientom zapewniamy kompleksową obsługę w zakresie ksiąg podatkowych oraz w obszarze
        kadrowo-płacowym. Zapraszamy do współpracy firmy działające w Legnicy oraz okolicach.
        </p>
        <h2>Dobre biuro rachunkowe Legnica</h2>
        <p class="lead" style="text-align: justify;">Jeśli chodzi o biura rachunkowe, Legnica ma wiele do zaoferowania. Nasze biuro księgowe wyróżnia
        nowoczesne podejście do klientów oraz zrozumienie realiów obecnych czasów. Wiemy, jak ważny jest czas dla
        każdego przedsiębiorcy, dlatego nie wymagamy osobistych wizyt w naszym biurze księgowym, nie dzwonimy z
        każdą drobną sprawą. Kontakt opieramy na poczcie e-mail, wiadomościach SMS oraz panelu klienta, w którym
        znajdują się wszelkie dane. Dzięki temu nasi partnerzy biznesowi mają całodobowy dostęp do informacji na temat
        zobowiązań oraz rozliczeń i nie są ograniczeni godzinami pracy biura. Takie podejście docenia coraz liczniejsze
        grono klientów - nasze biuro rachunkowe w Legnicy obsługuje około kilkadziesiąt firm z różnych branż, a
        pozytywne opinie i rekomendacje, potwierdzają wysoką jakość usług. Jako firma rozwijająca się, stawiamy
        przede wszystkim na zadowolenie Klientów. Jesteśmy konkurencyjni w zakresie wysokości opłat za nasze usługi.
        Stawiamy na transparentność - nie wszystkie biura rachunkowe w Legnicy otwarcie prezentują swój cennik na
        stronie, my zapraszamy do zapoznania się z nim w zakładce <a href="https://mojaksiegowosc.com/oferta">Oferta</a></p>
        <h2>Księgowość Legnica</h2>
        <p class="lead" style="text-align: justify;">Wszyscy pracownicy biura stale podnoszą swoje kompetencje oraz są na bieżąco z aktualizacjami przepisów. Wszystko to z myślą o dostarczaniu naszym klientom usług na najwyższym poziomie. Oferta Biura Rachunkowego Dominika Kozłowskiego jest skierowana do osób fizycznych oraz do firm z Legnicy oraz pobliskich miejscowości z województwa dolnośląskiego. Jeśli szukają Państwo profesjonalnej firmy z zakresu księgowości i kadr, cenią sobie czas oraz nowoczesne technologie, a także zależy na dobrej cenie, zdecydowanie warto wybrać nas.</p><br><br>
               
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
                   <h2>Księgowość on-line<br></h2>
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
                    <h2>Łatwy przepływ informacji<br></h2>
                <p class="lead text-justify" >Dokumenty przekazać nam możesz osobiście lub przez email, jak tylko będzie ci wygodnie, możemy nawet je odebrać w miejscu Twojej działalności.</p>
                <p class="lead text-justify">Wszystkie wiadomości dotyczące zobowiązań podatkowych przekażemy Ci co miesiąc, przez SMS lub e-mailem</p>
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
