<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>NLW</title>
  
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/includes/body.php'; ?>
</head>

<body>
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'). '/includes/upper-body.php'; ?>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Hvornår er der NLW</h3>
      </div>
      <div class="panel-body">
        <p>Nøvling LAN Week afholdes ca. 3 gange årligt.</p>
        <p>Næste NLW #27 afholdes fra 22. oktober kl. 17:30 til  24. oktober kl. 10:00.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Hvor afholdes NLW</h3>
      </div>
      <div class="panel-body">
        <p>Nøvling LAN Week afholdes i Nøvling Forsamlingshus.</p>
        <p>Nøvlingvej 135, 9260 Gistrup</p>
        <p>Skulle der være brug for det, er der gratis parkering omkring forsamlingshuset.</p>
      </div>
      <div class="panel-footer">
        <!--  <div id="map" style="width:100%;height:400px"></div>   -->

       <!-- <script>


          function initMap() {
            var forsamlingshus = {lat: 56.973445, lng: 9.957800};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: forsamlingshus
            });
            var marker = new google.maps.Marker({
              position: forsamlingshus,
              map: map
            });
          }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGPkDfY5Od07wJiq_oHSxhWYavtoYEuyI&callback=initMap"></script>
          -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.560471863361!2d9.95558621565957!3d56.97346108089732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ecb565b331575%3A0x661d1fe1881280e5!2sN%C3%B8vling+Forsamlingshus!5e0!3m2!1sda!2sdk!4v1501230642593" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Hvem kan deltage ved NLW</h3>
      </div>
      <div class="panel-body">
        <p>Nøvling LAN Week har ingen aldersbegrænsning og er for alle, der har lyst til at deltage. Det eneste krav er, at deltagerne skal kunne tage vare på sig selv.</p>
        <p>(Nøvling LAN Weeks Crew tager ikke ansvar for, at deltagere spiller spil, som kan være upassende for deltagerens aldersgruppe)</p>
 
        <p>Har du spørgsmål, eller er du i tvivl, så kontakt os <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/kontakt';?>">her</a>.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Kiosk</h3>
      </div>
      <div class="panel-body">
        <p>Til Nøvling LAN Week vil der være mulighed for at købe diverse drikke og mad. Udvalget kan variere, men herunder er priserne på de faste varer.</p>
        
        <ul class="list-group">
          <li class="list-group-item">
            <span class="badge">20 kr</span>
            Kaffe under hele NLW
          </li>
          <li class="list-group-item">
            <span class="badge">1 for 10 kr - 2 for 15 kr</span>
            Toast
          </li>
          <li class="list-group-item">
            <span class="badge">1 for 10 kr - 2 for 15 kr</span>
            Sodavand fl. varianter
          </li>
          <li class="list-group-item">
            <span class="badge">15 kr/stk</span>
            Energidrik fl. varianter*
          </li>
          <li class="list-group-item">
            <span class="badge">15 kr/stk</span>
            Cocio
          </li>
          </li>
        </ul>
        
        <p>Overstående er vejledende priser og der tages derfor forbehold for prisændringer under arrangementet. Toast og Sodavand kan kombineres.</p>
        <p>*Energidrik sælges kun til deltagere over 16 år eller med gyldig underskrift fra forældre.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Pris for deltagelse ved NLW</h3>
      </div>
      <div class="panel-body">
        <p>Prisen for deltagelse til Nøvling LAN Week varierer, da man kan tilkøbe mad. Det er også værd at bemærke, at prisen er billigere, hvis man bestiller sin billet i god tid.</p>
        
        <ul class="list-group">
          <li class="list-group-item" onclick="buyTicketFunc()">
            <span class="badge">175 kr</span>
            Forudbestilling mere end 10 dage før /med mad
          </li>
          <li class="list-group-item" onclick="buyTicketFunc()">
            <span class="badge">150 kr</span>
            Forudbestilling mere end 10 dage før /uden mad
          </li>
         <li class="list-group-item" onclick="buyTicketFunc()">
            <span class="badge">200 kr</span>
            Forudbestilling mindre end 10 dage før /med mad
          </li>
          <li class="list-group-item" onclick="buyTicketFunc()">
            <span class="badge">175 kr</span>
            Forudbestilling mindre end 10 dage før /uden mad
          </li> 
          <li class="list-group-item">
            <span class="badge">200 kr</span>
            Billet i døren /uden mad
          </li>
          <li class="list-group-item">
            <span class="badge">30 kr</span>
              <p>Gæstebillet til de der deltager uden computer og mad, men bliver ved NLW i flere timer. Betales i døren</p>
              <p>
                  NB! Det kræver ikke gæstebillet at komme ind og se NLW i en halv times tid!
              </p>
          </li>
        </ul>
        
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Mad</h3>
      </div>
      <div class="panel-body">
        <p>Madbilletten, man kan købe med sin pladsbillet, sikrer aftensmad lørdag aften, samt morgenmad lørdag og søndag morgen.</p>
        <p>Aftensmaden lørdag aften kl. 19:00 består af Pulled Pork Burgere! (Her afregnes 2 burgere per deltager).</p>
        <p>Morgenmad lørdag og søndag kl. 08:30 består af rundstykker med marmelade, smør, pålægschokolade og juice/mælk/kaffe.</p>


      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Overnatning</h3>
      </div>
      <div class="panel-body">
        <p>Nøvling forsamlingshus er indrettet med to sale, hvor begge sale er indrettet til deltagere. Scenen bliver blive indrettet som soverum, men det anbefales (grundet pladsmangel), at deltagerne enten tager hjem, eller finder en kammerat at tage hjem til for at sove.</p>
        <p>I soverummet SKAL der være ro mellem 23:00 - 08:00.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Sikkerhed</h3>
      </div>
      <div class="panel-body">
        <p>Sikkerheden blandt vores deltagere er vigtig!  Det vil derfor altid være muligt at komme i kontakt med et Crew medlem. Der vil under hele arrangementet være minimum to fra Crew-team vågne til at tage sig af evt. problemer, der måtte opstå.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Internet</h3>
      </div>
      <div class="panel-body">
        <p>Nøvling LAN Week sørger altid for den bedst mulig forbindelse, (der kan opkræves på landet).</p>
        <p>Hastighed: 100/100 Mbit bredbånd, med en forbindelse på 1 Gbit(1000 Mbit) mellem deltagerne.</p>
        <p>For at belaste bredbåndet mindst muligt, bedes deltagerne have forudinstalleret og opdateret spil hjemmefra - på den måde får alle den bedste gaming oplevelse.</p>
      </div>
    </div>
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Konkurrencer</h3>
        </div>
        <div class="panel-body">
        <p>Nøvling LAN Week tager forbehold for antal deltagere, og retten til at annullere konkurrencer, hvis der ikke er nok tilmeldinger.</p>
        <p>Reglerne for konkurrencerne, kan findes under de respektive konkurrence sider: <a href="konkurrencer.php">Konkurrencer</a></p>
    </div>
    </div>


    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Glemte sager</h3>
      </div>
      <div class="panel-body">
        <p>Alle glemte sager fra et arrangement tages billede af, og ligges op på vores <a href="https://www.facebook.com/NovlingLANWeek">Facebook side</a>. Ser du noget, du har mistet kan vi kontaktes <a href="/kontakt">her</a>.​</p>
        <p>Glemte sager gemmes i op til 2 arrangementer, derefter bliver det givet væk eller smidt ud.</p>
      </div>
    </div>
  

  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/includes/lower-body.php';?>
</body>
</html>