
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: #273353!important;">
    <a class="navbar-brand" href="/"><img class="p-0 m-0" style="max-height: 50px;" src={{ asset('image/LogoBiuroMale.png') }}></a>
    <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <li class="list-inline-item text-center"><a href="https://www.facebook.com/Biuro-Rachunkowe-Dominik-Koz%C5%82owski-105960224716487"><i class="fa fa-facebook fa-2x fa-fw" style="color: rgb(255,255,255);"></i></a></li>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto" style="font-size: 18px;">
        <a class="nav-item nav-link active text-white text-center" href="/">Biuro <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link text-white text-center" href="/#onas">O nas</a>
        <a class="nav-item nav-link text-white text-center" href="/oferta">Oferta</a>
        <a class="nav-item nav-link text-white text-center" href="/kontakt">Kontakt</a>
          @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-intem nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
      </div>
    </div>
  </nav>


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

