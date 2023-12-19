@extends('layouts.html')
@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo"><img src="../img/logo-small.png" alt=""></a>
      <h1 class="logo me-auto"><a href="/">Tec-Point<span>.</span></a></h1>
      
      <a class="nav-link-flag" href="/en/index.html"><span class="flag-icon flag-icon-en"></span></a>
      <a class="nav-link-flag" href="/pl/index.html"><span class="flag-icon flag-icon-pl"></span></a>
      <a class="nav-link-flag" href="/ro/index.html"><span class="flag-icon flag-icon-ro"></span></a>
      <a class="nav-link-flag" href="/ru/index.html"><span class="flag-icon flag-icon-ru"></span></a>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Oferta</a></li>
          <li><a class="nav-link scrollto" href="#services">Usługi</a></li>
          <li><a class="nav-link scrollto " href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav>
    </div>
  </header>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Praca w Niemczech</h1>
          <h2>Praca na produkcji w największej w Europie firmie z branży spożywczej</h2>
          <a href="apply" class="btn-get-started scrollto">Aplikuj</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs">
    <div class="section-title">
      <h2>Informacje</h2>
      <p>Praca za granicą bez znajomości języka, również dla pracowników niewykwalifikowanych. </p>
    </div>
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-4">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="ri-account-box-fill"></i>
            <h4 class="d-none d-lg-block">Oferta pracy </h4>
          </a>
        </li>
        <li class="nav-item col-4">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">Dlaczego warto pracować zagranicą </h4>
          </a>
        </li>
        <li class="nav-item col-4">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Spróbuj czegoś nowego</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <p class="fst-italic">
                Twój zakres obowiązków
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Realizowanie zadań zgodnie z planem produkcyjnym.</li>
                <li><i class="ri-check-double-line"></i> Zgłaszanie awarii w urządzeniach i maszynach znajdujących się na hali produkcyjnej.</li>
                <li><i class="ri-check-double-line"></i> Dbanie o utrzymanie odpowiedniej jakości produkowanych towarów.</li>
              </ul>
              
              <p class="fst-italic">
                Nasze wymagania
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Brak przeciwskazań do wykonywania pracy fizycznej.</li>
                <li><i class="ri-check-double-line"></i> Brak przeciwskazań do pracy z mięsem (alergie, choroby skóry).</li>
                <li><i class="ri-check-double-line"></i> Brak przeciwskazań do pracy w chłodniejszych warunkach.</li>
                <li><i class="ri-check-double-line"></i> Determinacja i zdyscyplonowanie w wykonywaniu powierzonych obowiązków.</li>
                <li><i class="ri-check-double-line"></i> Umiejętność pracy w zespole, sumienność, dokładność.</li>
              </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <p class="fst-italic">
                To oferujemy
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Dobrze płatną pracę dla osób posiadających kwalifikacje i doświadczenie w branży mięsnej.</li>
                <li><i class="ri-check-double-line"></i> Chętnie zatrudnimy również pracowników bez kwalifikacji czy doświadczenia w naszej branży, oferujemy przeszkolenie i przyuczenie do zawodu poprzez szkolenia wewnątrzzakładowe.</li>
                <li><i class="ri-check-double-line"></i> Stabilne zatrudnienie w niemieckiej firmie na podstawie umowy o pracę i niemiecki pakiet socjalny ( ubezpieczenie w niemieckiej kasie chorych, opiekę medyczną na wysokim poziomie oraz Kindergeld).</li>
                <li><i class="ri-check-double-line"></i> Pierwsza umowa o pracę jest na rok czasu z możliwością przedłużenia. W umowie zawarty jest 6 miesięczny okres próbny.</li>
                <li><i class="ri-check-double-line"></i> Gwarantujemy urlop wypoczynkowy (24 dni na rok czasu trwania umowy) i minimum 40-to godzinny tygodniowy czas pracy.</li>
                <li><i class="ri-check-double-line"></i> Stawka godzinowa na Pakowaniu wynosi <b>12,20 €</b> do tego dochodzą premie stanowiskowe i dodatki nocne. Stawka godzinowa na Rozbiorze wynosi: dla osób <b>z doświadczeniem 15,00 €</b>, dla osób <b>bez doświadczenia 13,00 €</b>.</li>
                <li><i class="ri-check-double-line"></i> Pracę w systemie jedno lub dwu zmianowym, 7-9 godzin dziennie, 5-6 dni w tygodniu.</li>
                <li><i class="ri-check-double-line"></i> Pracodawca oferuje zakwaterowanie blisko zakładu pracy (od 3,5km). Całkowity koszt zakwaterowania <b>254€</b> miesięcznie za osobę.</li>
                <li><i class="ri-check-double-line"></i> Dla małżeństw i par oferujemy wspólne zakwaterowanie oraz możliwość pracy na jednym dziale.</li>
                <li><i class="ri-check-double-line"></i> Również zatrudnienie dla uczniów i studentów w okresie wakacji</b> i przerw w nauce.</li>
                <li><i class="ri-check-double-line"></i> Kantyna w zakładzie pracy, koszt pełnowartościowego posiłku od 2,50€ do 3,50€.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <p class="fst-italic">
                Dlaczego warto pracować w tym przypadku w Niemczech w mieście Rheda-Wiedenbrück.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Wyższe zarobki, większa moc nabywcza pieniądza.</li>
                <li><i class="ri-check-double-line"></i> Inna kultura pracy.</li>
                <li><i class="ri-check-double-line"></i> Służba zdrowia, która działa.</li>
                <li><i class="ri-check-double-line"></i> Szybsza możliwość awansu.</li>
                <li><i class="ri-check-double-line"></i> Niskie bezrobocie.</li>
                <li><i class="ri-check-double-line"></i> Czyste powietrze.</li>
                <li><i class="ri-check-double-line"></i> <a href="https://www.rheda-wiedenbrueck.de" target="_blank">Piękne miasto. </a></li>
                <li><i class="ri-check-double-line"></i> <a href="https://www.emsradweg.de/emsradweg" target="_blank">Ścieżki rowerowe. </a></li>
              </ul>
              <p>
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <p class="fst-italic">
                Zawsze myślałeś o pracy zagranicą, ale miałeś obawy spowodowane brakiem znajomości języka.
                Nie chcesz też jechać w ciemno.
              </p>
              <p class="fst-italic">
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Nie wymagamy znajomości jezyka niemieckiego.</li>
                <li><i class="ri-check-double-line"></i> Przyjeżdżasz do nas i masz pewną pracę.</li>
                <li><i class="ri-check-double-line"></i> Dostaniesz wyposażone mieszkanie.</li>
                <li><i class="ri-check-double-line"></i> Ubezpieczenie.</li>
                <li><i class="ri-check-double-line"></i> Polskiego lekarza.</li>
                <li><i class="ri-check-double-line"></i> Opiekę naszego biura. </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              
            </div>
          </div>
        </div>
        
        
    </div>
  </section><!-- End Tabs Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="section-title">
        <h2>Oferta</h2>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Praca u największego producenta produktów mięsnych w europie</h3>
              <p>
                Będziesz pracował w firmie bezpośrednio u pracodawcy.
              </p>
              <a href="#services" class="about-btn"><span>Usługi</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Lokalizacja</h4>
                  <p>Firma ma swą siedzibę w mieście Rheda-Wiedenbrück.</p>
                </div>
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Miasto</h4>
                  <p>Rheda-Wiedenbrück to miasto które powstało z połączenia starego ponad 1000 letniego miasta Wiedenbrück i nowej czesci Rheda.</p>
                </div>
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Dojazd</h4>
                  <p>Dogodny dojazd do pracy firma znajduje się przy węźle autostrady.</p>
                </div>
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Mieszkania</h4>
                  <p>Mieszkania oddalone około 3,5km od miejsca pracy.</p>
                </div>
              
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="1072" data-purecounter-duration="1" class="purecounter"></span>
          <p>Aktualnie pracujący</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
          <p>Działamy od lat </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p>Godzin konsultacji</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Usługi</h2>
          <p>W czym będziemy Ci służyć pomocą</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4>Zameldowanie</h4>
              <p>Załatwimy termin w urzędzie miasta w celu zameldowania Twojej osoby. Tak żebyś legalnie tutaj przebywał.<br><br></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4>Mieszkanie</h4>
              <p>Zapewnimy mieszkanie w niedalekiej odległości od pracy, wyposażone w przybory kuchenne, pralkę, lodówkę. Pokoje maksymalnie dwu osobowe.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4>Umowa o pracę</h4>
              <p>Dostaniesz od nas umowę o pracę bezpośrednio z niemieckim pracodawcą. Na okres 12 miesięcy. </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4>Ubezpieczenie</h4>
              <p>Już pierwszego dnia pobytu ubezpieczymy Cię.<br><br></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4>Abonament RTV</h4>
              <p>Abonament RTV jest tak samo jak w Polsce obowiązkowo płatny. Abyś nie miał problemu wypełnimy wszystkie dokumenty.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Konto bankowe</a></h4>
              <p>Pomożemy w założeniu konta bankowego, jeżeli nie posiadasz takowego.<br><br></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FAQ</h2>
        </div>
        <ul class="faq-list accordion" data-aos="fade-up">
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Ile zarobię na rękę ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p class="fst-italic">
                Zarobki są uzależnione od ilości przepracowanych godzin, grupy podatkowej, ilości posiadanych dzieci.
              </p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Jakie dokumenty zabrać ze sobą ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p class="fst-italic">
                Dowód osobisty, jeżeli pracowałeś już wcześniej w Niemczech to potrzebny będzie również numer podatkowy, numer ubezpieczenia.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Czy istnieje możliwość otrzymania zaliczki ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p class="fst-italic">
                Tak. Każdy z zatrudnionych pracowników ma prawo ubiegać się o zaliczkę. 
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">W której klasie podatkowej będę rozliczany ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p class="fst-italic">
                To zależy. Wyróżnianych jest 6 klas podatkowych. Wszystkie osoby, które żyją samotnie, (kawaler lub panna) automatycznie otrzymają 6. lub 1. klasę podatkową - tylko osoby w związku małżeńskim mogą wybierać pomiędzy pozostałymi klasami.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Czy mogę mieć polskie konto do przelewu wynagrodzenia ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tak, ale musi być to konto walutowe, ponieważ wynagrodzenie jest przelewane w Euro.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Masz jakieś pytania, wątpliwości chcesz nawiązać współpracę, pisz śmiało. Odpowiemy na wszelkie pytania.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Nasz adres</h3>
                  Kupferstraße 10, 33378 Rheda-Wiedenbrück, Deutschland
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  
                  <p><a href="mailto:jobs.pl@tec-point.de"> jobs.pl@tec-point.de</a></p>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Zadzwoń do nas</h3> 
                  <p>Mówimy po polsku</p>
                  <p><a href="tel:+4952429353172">+49 524 293 531 72</a></p>
                  <p><a href="tel:+4952429353161">+49 524 293 531 61</a></p>
                  <p><a href="tel:+4952429353171">+49 524 293 531 71</a></p>
                  <p><a href="tel:+4915162601900">+49 151 626 019 00</a> (Whatsapp)</p>
                </div>
              </div>             
            </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tec-Point<span>.</span></h3>
            <p>
              Kupferstraße 10 <br>
              33378 Rheda-Wiedenbrück<br>
              Deutschland <br><br>
              <strong>Phone:</strong>  
              <p><a href="tel:+4952429353172">+49 524 293 531 72</a></p>
              <p><a href="tel:+4952429353161">+49 524 293 531 61</a></p>
              <p><a href="tel:+4952429353171">+49 524 293 531 71</a></p>
              <p><a href="tel:+49 151 626 019 00">+49 151 626 019 00</a> (Whatsapp)</p>
              <strong>Email:</strong><a href="mailto:jobs.pl@tec-point.de"> jobs.pl@tec-point.de</a><br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Linki</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Oferta</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Usługi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontakt</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.html">Polityka prywatności</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Info</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="../datenschutz.html">Datenschutz</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../datenschutz.html">Impressum</a></li>
                </ul>
         </div>

         <div id="cookies" class="row d-none">
          <div class="me-md-auto text-center text-md-start">    
            <div class="cookie-banner alert alert-danger" style="display: block;">
              <i class="glyphicon glyphicon-info-sign"></i>Strona używa ciasteczek <strong> cookies </strong>. Więcej informacji znajdziesz w <a href="privacy.html">polityce prywatności</a>
              <button class="btn btn-primary" onClick="closeCookies()">Akceptuj</button>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
@stop
