@php
$list = array(
"Gebäude und Hofreinigung" =>
array
(
"Welche Dienstleistungen umfasst die Gebäude und Hofreinigung ?" => "Unsere Dienstleistungen umfassen die Reinigung von Innenräumen, Fenstern, Böden, sanitären Anlagen sowie die Reinigung und Pflege von Außenbereichen wie Höfen und Parkplätzen.",
"Bieten Sie maßgeschneiderte Reinigungspakete an ?" => "Ja, wir bieten maßgeschneiderte Reinigungspakete an, die auf die spezifischen Bedürfnisse unserer Kunden zugeschnitten sind.",
"Wie oft führen Sie die Gebäudereinigung durch ?" => "Die Häufigkeit der Gebäudereinigung hängt von den Anforderungen des Kunden ab. Wir bieten sowohl regelmäßige Reinigungspläne als auch einmalige Reinigungen an.",
"Deckt Ihre Hofreinigung auch die Entfernung von Laub und anderen Ablagerungen ab ?" => "Ja, unsere Hofreinigung umfasst die Entfernung von Laub, Schmutz und anderen Ablagerungen, um eine saubere und gepflegte Umgebung zu gewährleisten.",
"Bieten Sie auch Fensterreinigungsdienste an ?" => "Ja, wir bieten professionelle Fensterreinigungsdienste für Innen- und Außenfenster an."
),
"Gartenpflege" =>
array
(
"Welche Gartendienstleistungen bieten Sie an ?" => "Unsere Dienstleistungen umfassen unter anderem das Rasenmähen, das Schneiden von Büschen, die Pflege von Blumenbeeten, Bewässerung, Unkrautbekämpfung und vieles mehr.",
"Wie sind Ihre Preise für Gartendienstleistungen ?" => " Die Preise variieren je nach Art der Dienstleistung und der Größe des zu betreuenden Bereichs. Kontaktieren Sie uns für ein individuelles Angebot.",
"Bieten Sie regelmäßige Gartenpflege an ?" => "Ja, wir bieten sowohl einmalige als auch regelmäßige Gartenpflegedienste an. Wir passen uns den Bedürfnissen unserer Kunden an.",
"Wie oft sollte ich Ihre Gartenpflegedienste in Anspruch nehmen ?" => "Die Häufigkeit hängt von der Art der Pflanzen, den Wetterbedingungen und den persönlichen Vorlieben ab. In der Regel empfehlen wir eine regelmäßige Pflege während der Wachstumsperiode.",
"Bieten Sie Dienstleistungen im Bereich Gartengestaltung an ?" => "Ja, wir bieten Gartengestaltungsdienstleistungen an, einschließlich der Planung von Pflanzungen, der Installation von Beleuchtung und anderer gestalterischer Elemente.",
"Welche Arbeitszeiten haben Sie ?" => "Unsere Arbeitszeiten sind flexibel, und wir passen uns dem Zeitplan unserer Kunden an. Wir bieten auch Wochenenddienste an, wenn dies erforderlich ist.",
"Bieten Sie Ihre Dienstleistungen in der gesamten Stadt an ?" => "Ja, wir bedienen Kunden in der gesamten Stadt. Kontaktieren Sie uns, um herauszufinden, ob wir auch Ihr Gebiet abdecken."
),
"Winterdienst" =>
array
(
"Welche Winterdienstleistungen bieten Sie an ?" => "Unsere Winterdienstleistungen umfassen Schneeräumung, Eisbeseitigung, Streudienste und allgemeine Sicherheitsmaßnahmen bei winterlichen Bedingungen.",
"Wie funktioniert Ihr Schneeräumdienst ?" => "Wir überwachen die Wetterbedingungen und räumen Schnee, sobald erforderlich. Dies beinhaltet das Räumen von Wegen, Zufahrten und Parkplätzen.",
"Bieten Sie auch Streudienste an ?" => "Ja, wir bieten Streudienste an, um rutschige Oberflächen zu behandeln und die Bildung von Eis zu verhindern.",
"Wie oft erfolgt die Schneeräumung ?" => "Die Häufigkeit der Schneeräumung hängt von den Wetterbedingungen ab. Wir passen unsere Dienstleistungen an die Intensität der Schneefälle an.",
"Welche Bereiche deckt Ihr Winterdienst ab ?"=> "Unser Winterdienst umfasst Gehwege, Einfahrten, Parkplätze und andere Flächen, die für Fußgänger und Fahrzeuge zugänglich sind.",
"Wie reagieren Sie auf Notfälle bei extremen Wetterbedingungen ?" => "Im Falle von extremen Wetterbedingungen sind wir rund um die Uhr verfügbar und reagieren schnell auf Notfälle."

)
);

$i = 0;

@endphp

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>FAQ</h2>
    </div>
    @foreach ($list as $key => $value)
    <h3>{{ $key }}</h3>
    <br>

    <ul class="faq-list accordion" data-aos="fade-up">
      @foreach ($value as $key => $value)
      <li>
        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq{{ ++$i }}" aria-expanded="false">
          {{ $key }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i>
        </a>
        <div id="faq{{ $i }}" class="collapse" data-bs-parent=".faq-list">
          <p class="fst-italic">
            {{ $value }}
          </p>
        </div>
      </li>
      @endforeach
    </ul>
    @endforeach

  </div>
</section>
<!-- End Frequently Asked Questions Section -->