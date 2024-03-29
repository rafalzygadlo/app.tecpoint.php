@extends('layouts.html')
@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-scrolled">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo"><img src="../img/logo-small.png" alt=""></a>
      <h1 class="logo me-auto"><a href="/">Tec-Point<span>.</span></a></h1>
      
      <a class="nav-link-flag" href="/en/index.html"><span class="flag-icon flag-icon-en"></span></a>
      <a class="nav-link-flag" href="/pl/index.html"><span class="flag-icon flag-icon-pl"></span></a>
      <a class="nav-link-flag" href="/ro/index.html"><span class="flag-icon flag-icon-ro"></span></a>
      <a class="nav-link-flag" href="/ru/index.html"><span class="flag-icon flag-icon-ru"></span></a>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Acasă</a></li>
          <li><a class="nav-link scrollto" href="#about">Oferta</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicii</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto active" href="#contact">Contacte</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->
      
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Un loc de muncă în Germania</h1>
          <h2>Lucrați la producție în cea mai mare companie alimentară din Europa</h2>
          <a href="apply" class="btn-get-started scrollto">Informație</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs">
    <div class="section-title">
      <h2>Informație</h2>
      <p>Lucru în străinătate fără cunoașterea limbii, și pentru muncitori necalificați.</p>
    </div>
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-4">
          <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="ri-account-box-fill"></i>
            <h4 class="d-none d-lg-block">Ofertă de muncă</h4>
          </a>
        </li>
        <li class="nav-item col-4">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">De ce merită să lucrezi în străinătate</h4>
          </a>
        </li>
        <li class="nav-item col-4">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Incearca ceva nou</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane show active" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <p class="fst-italic">
                Domeniul dvs. de sarcini
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Îndeplinirea sarcinilor in conformitate cu planul de productie.</li>
                <li><i class="ri-check-double-line"></i>Raportarea defecțiunilor apărute la aparatele și mașinile aflate în hala de producție.</li>
                <li><i class="ri-check-double-line"></i>Menținerea și asigurarea calității corespunzătoare a produselor fabricate.</li>
              </ul>
              
              <p class="fst-italic">
                Aşteptările noastre
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Lipsa contraindicațiilor pentru munca fizică.</li>
                <li><i class="ri-check-double-line"></i>Lipsa contraindicațiilor pentru lucrul cu carne (alergii, boli de piele).</li>
                <li><i class="ri-check-double-line"></i>Lipsa contraindicațiilor  pentru lucru în condiții mai reci (+4;+8 Gade Celsius)</li>
                <li><i class="ri-check-double-line"></i>Angajament si disciplină la îndeplinirea atribuțiilor incredințate.</li>
                <li><i class="ri-check-double-line"></i>Capacitate de lucru în echipă, seriozitate, acuratețe.</li>
              </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <p class="fst-italic">
                Aceasta este ceea ce oferim
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Un loc de muncă bine plătit pentru persoane cu calificare și experiență în industria cărnii.</li>
                <li><i class="ri-check-double-line"></i>De asemenea, suntem bucuroși să angajăm lucrători necalificați sau fără experiență în compania noastra, oferim școlarizare și instruire prin training intern.</li>
                <li><i class="ri-check-double-line"></i>Muncă  stabilă într-o companie germană în baza unui contract de muncă. Pachet social german (asigurare în fondul german de asigurări de sănătate, asistență medicală de nivel înalt și Kindergeld).</li>
                <li><i class="ri-check-double-line"></i>Primul contract de munca este pe un an cu posibilitate de prelungire. Contractul include o perioadă de probă de 6 luni.</li>
                <li><i class="ri-check-double-line"></i>Garantam concediu de odihna (24 de zile pe an pe durata contractului) si minim 40 de ore de munca pe saptamana.</li>
                <li><i class="ri-check-double-line"></i><b>Tariful brut pentru Ambalare este de 12,20 € </b>  , la oră , plus premiere și indemnizații de noapte. Tariful brut pentru tranșare este: pentru persoanele <b>cu experiență 15,00 €</b> la oră .</li>
                <li><i class="ri-check-double-line"></i>Lucrați într-un sistem cu un schimb sau două, 7-9 ore pe zi, 5-6 zile pe săptămână.</li>
                <li><i class="ri-check-double-line"></i>Angajatorul oferă cazare (de la 3,5 pâna la 20 km). Costul total de cazare este de <b>254 €</b> pe lună de persoană.</li>
                <li><i class="ri-check-double-line"></i>Pentru cupluri, oferim cazare în comun și posibilitatea de a lucra într-o secție.</li>
                <li><i class="ri-check-double-line"></i>De asemenea, locuri de muncă pentru elevi și studenți în vacanțele de vară.</li>
                <li><i class="ri-check-double-line"></i>Cantina la locul de muncă, costul unei mese de la 2,50 € la 3,50 €.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 " data-aos="fade-up" data-aos-delay="100">
              <p class="fst-italic">
                De ce să lucrezi în acest caz în Germania în orașul Rheda-Wiedenbrück.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Câștiguri mai mari, putere de cumpărare mai mare a banilor.</li>
                <li><i class="ri-check-double-line"></i>Cultură diferită a muncii.</li>
                <li><i class="ri-check-double-line"></i>Asistență medicală care funcționează.</li>
                <li><i class="ri-check-double-line"></i>Oportunitate de promovare mai rapidă.</li>
                <li><i class="ri-check-double-line"></i>Șomajul scăzut.</li>
                <li><i class="ri-check-double-line"></i>Aer curat.</li>
                <li><i class="ri-check-double-line"></i> <a href="https://www.rheda-wiedenbrueck.de/" target="_blank">Oras frumos.</a></li>
                <li><i class="ri-check-double-line"></i> <a href="https://www.emsradweg.de/emsradweg" target="_blank">Piste pentru biciclete.</a></li>
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
                Întotdeauna te-ai gândit să lucrezi în străinătate, dar îți faci griji pentru că nu cunoști limba. De asemenea, nu vrei să dai în bară.
              </p>
              <p class="fst-italic">
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i>Nu cerem cunoșterea limbii Germane.</li>
                <li><i class="ri-check-double-line"></i>Vii la noi și ai un loc de muncă sigur.</li>
                <li><i class="ri-check-double-line"></i>Vei primi un apartament utilat.</li>
                <li><i class="ri-check-double-line"></i>Asigurare.</li>
                <li><i class="ri-check-double-line"></i>Grija biroului nostru.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              
            </div>
          </div>
        </div>
        
        
    </div>
  </div></section><!-- End Tabs Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="section-title">
        <h2>Oferta</h2>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Lucrează la cel maI mare producător de produse din carne din Europa.</h3>
              <p>
                Veți lucra la direct cu angajatorul dumneavoastră.
              </p>
              <a href="#services" class="about-btn"><span>Servicii</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Locație</h4>
                  <p>Compania are sediul în Rheda-Wiedenbrück.</p>
                </div>
                
                <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Localitatea</h4>
                  <p>Rheda-Wiedenbrück este un oraș care a apărut din combinația dintre orașul vechi de peste 1000 de ani Wiedenbrück și partea nouă a Rheda.</p>
                </div>
                
                <div class="col-md-6 icon-box " data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Deplasarea la locul de muncă</h4>
                  <p>Acces comod la locul de munca, firma este situata la intersectie cu autostrada.</p>
                </div>
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Cazarea </h4>
                  <p>Apartamente la doar 3,5-20 km distanta de locul de munca.</p>
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
          <span data-purecounter-start="0" data-purecounter-end="1072" data-purecounter-duration="0" class="purecounter">1.072</span>
          <p>Momentan lucrez</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="0" class="purecounter">15</span>
          <p>Funcționăm de ani de zile</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="0" class="purecounter">1.463</span>
          <p>Ore de consultație</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->


  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servicii</h2>
          <p>Noi te vom ajuta</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4>Viza de reședință</h4>
              <p>Vom efectua o programare la primărie pentru a face viza de reședință. Pentru ca săpoți locui legal în Germania.<br><br></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4>Locuința</h4>
              <p>Vă punem la dispoziție o locuință nu departe de muncă, dotat cu mașina de spălat rufele și frigider. Odăile de până la două persoane.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4>Contract de munca</h4>
              <p>Veți obține un contract de muncă de la noi direct cu un angajator german. Pe o perioadă de 12 luni.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4>Asigurare</h4>
              <p>Vă vom asigura în prima zi a șederii dumneavoastră.<br><br></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4>Impozitele ARD/ZDF</h4>
              <p>Impozitul pentru televiziune este obligatoriu in Germania. Formularele vor fi completate de noi  și ulterior achitate.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-calendar4-week"></i>
              <h4>Cont bancar</h4>
              <p>Vă vom ajuta să deschideți un cont bancar, dacă nu aveți unul.<br><br></p>
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
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1" aria-expanded="false">Cât voi câștiga la mâna ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list" >
              <p class="fst-italic">
                Câștigurile depind de numărul de ore lucrate, grupul fiscal și numărul de copii pe care îi aveți.
              </p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed" aria-expanded="false">Ce documente ar trebui să iau cu mine?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list" >
              <p class="fst-italic">
                Cartea de identitate a unei țări membre UE. Dacă ați mai lucrat în Germania, veți avea nevoie de numărul fiscal și numarul asigurării sociale.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed" aria-expanded="false">Este posibil să primiți o plată în avans?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list" >
              <p class="fst-italic">
                Da. Toți  salariații au dreptul să solicita o plată în avans. 
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed" aria-expanded="false">În ce clasă fiscală voi fi contabilizat?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p class="fst-italic">
                Depinde. Există 6 clase de taxe. Toate persoanele singure (necăsătorite sau singure) vor primi automat clasa de impozitare 6 sau 1 - doar persoanele căsătorite pot alege între celelalte clase de impozitare.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed" aria-expanded="true">Pot avea un cont Român pentru a-mi transfera salariul ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Da, dar trebuie să fie un cont în valută deoarece salariul este transferat în euro.
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
          <h2>CONTACTE</h2>
          <p>Aveți întrebări, îndoieli, doriți să cooperați, nu ezitați să scrieți. Vă vom răspunde la orice întebare</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Adresa noastră</h3>
                  Kupferstraße 10, 33378 Rheda-Wiedenbrück, Deutschland
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>E-mail</h3>
                  
                  <p><a href="mailto:jobs.ro@tec-point.de">jobs.ro@tec-point.de</a></p>
                  <br><br><br><br>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>suna-ne</h3> 
                  <p>Vorbim în romana</p>
                  <p><a href="tel:+49 524 293 531 71">+49 524 293 531 71</a></p>
                  <p><a href="tel:+49 524 293 531 64">+49 524 293 531 64</a></p>
                  <p><a href="tel:+49 524 293 531 61">+49 524 293 531 61</a></p> 
                  <p><a href="tel:+49 151 626 019 00">+49 151 626 019 00</a> (Wiber/Whatsapp)</p>
                  
                </div>
              </div>             
            </div>
        </div>

      </div>
    </div></section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tec-Point <span>.</span></h3>
            <p>
              Kupferstraße 10 <br>
              33378 Rheda-Wiedenbrück <br>
              Deutschland <br><br>
              <strong>Telefon:</strong>
              <p><a href="tel:+49 524 293 531 71">+49 524 293 531 71</a></p>
              <p><a href="tel:+49 524 293 531 64">+49 524 293 531 64</a></p>
              <p><a href="tel:+49 524 293 531 61">+49 524 293 531 61</a></p> 
              <p><a href="tel:+49 151 626 019 00">+49 151 626 019 00</a> (Wiber/Whatsapp)</p>
              <strong>E-mail: </strong><a href="mailto:jobs.ro@tec-point.de">jobs.ro@tec-point.de</a><br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Legături</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Oferta</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Servicii</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacte</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/ro/privacy.html">Politica de Confidențialitate</a></li>
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
    </div>
@stop

