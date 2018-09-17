<!DOCTYPE html>

<!--
* Created by IntelliJ IDEA.
* User: cheec
* Date: 04-08-2018
* Time: 19:56
-->

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
    <div class="panel-heading banner-fortnite"></div>
    <div class="panel-body">
        <p>NLW's Fortnite turnering! Winner, winner - eat the others for dinner! Skyd dig gennem modstanderne og vis hvem der ikke er for dinner!</p>
        <a href="" target="_blank"><button type="button" disabled class="btn btn-default btn-block tournament-button center-block" title="Tilmelding sker ved NLW start">Tilmeld</button></a>
    </div>

    <div class="panel-body">
        <p>I år har vi 2 forskellige former for gamemodes i Fortnite Battle Royale. I kan være med til at bestemme hvilke af disse 2 gamemodes I fortrækker at spille til LAN'et.
            <br />Hvilken gamemode vi spiller, vil blive bestemt via. en afstemning til selve NLW. Ved mange deltagere/stemmer kan begge turneringer blive en realitet.</p>
        <h2><b>Gamemode: Solo</b></h2>
    </div>
    <div class='panel-heading'>§1 Format</div>
    <ul class="list-group">
        <li class="list-group-item">§1.1 I dette gamemode er du helt på egen hånd. </li>
        <li class="list-group-item">§1.2 Det gælder om for dig at score flest <b>Eliminations</b> og <b>Victory Royales</b> </li>
    </ul>
    <div class='panel-heading'>§2 Regler</div>
    <ul class="list-group">
        <li class="list-group-item">§2.1 Der gives point per <b>Eliminations</b>, <b>Victory Royales</b> og <b>20-bomb</b> (+20 kills)</li>
        <li class="list-group-item">§2.2 Per <b>Eliminations</b> - 1 point</li>
        <li class="list-group-item">§2.3 Ved <b>Victory Royal</b> - 5 points</li>
        <li class="list-group-item">§2.4 Ved <b>20-bomb</b> - 10 ekstra points</li>
        <li class="list-group-item">§2.5 Alle deltagere skal være tilstede under NLW</li>
        <li class="list-group-item">§2.6 Første game SKAL spilles på bestemt tidspunkt</li>
        <div class="panel-body">
            <p>Første game skal alle være klar til at trykke READY. Når hornet går, trykker alle ready. <br /> Det er selvfølgelig ikke sikkert deltagerne og dig kommer til at spille imod hinanden, men det er der større sandsynlighed for i første game.  </p>
        </div>
        <li class="list-group-item">§2.7 Efter første game, er det op til deltageren selv at spille de resterende games</li>
        <div class="panel-body">
            <p>Turneringen slutter kl. 00:00 Fredag nat. Hver spiller har spillet de 10 games, og skrevet ned antal kills/wins.
                <br />For at kunne bevise antal <b>Eliminations</b> og/eller <b>Victory Royales</b> SKAL deltageren sætte replays til, som vil blive brugt til sammenligning. Hvis man er en haj til spillet og har droppet en <b>20-bomb</b> skal dette selvfølgelig også screenshottes.
                <br />Vi regner dernæst sammen på hvor mange points man har fået, og så bliver der udråbt en vinder.</p>
        </div>
    </ul>

    <div class='panel-heading'>§5 Snyd</div>
    <ul class="list-group">
        <li class="list-group-item">§5.1 Det er op til deltagerne selv at påvise snyd, såfremt der er mistanke om dette. <br />Så snart mistanken opstår, bedes du kontakte Admin </li>
    </ul>
    <div class='panel-heading'>§6 Præmiepulje fordeling - Solo</div>
    <ul class="list-group">
        <li class="list-group-item">1. pladsen 750 kr.</li>
        <li class="list-group-item">2. pladsen 250 kr.</li>

      <!--  <li class="list-group-item">*Ved maksimal præmiepulje</li>  -->
    </ul>
</div>
    <!-- DUO GAME MODE -->
<div class="panel panel-primary">
    <div class="panel-body">
        <h2><b>Gamemode: Duo</b></h2>
    </div>
    <div class='panel-heading'>§1 Format</div>
    <ul class="list-group">
        <li class="list-group-item">§1.1 I dette gamemode er dig og din makker sammen </li>
        <li class="list-group-item">§1.2 Det gælder om for dig og din makker at score flere <b>Eliminations</b>, end det modstander hold I er oppe imod</li>
        <div class="panel-body">I dette gamemode vælger du en makker til at hjælpe dig igennem det intense og stressende <b>Sqaud Don't Fill Mode</b>. <br />Her teamer I op sammen med det hold I skal spille imod. Det vil sige at I ikke lander det samme sted når din makker og dig hopper ud af kamp bussen. <br />I dette gamemode gælder det om at få flest kills over 3 games imod det andet hold i spiller imod. <br />Det er knockout, hvis du taber til det andet hold, er jeres hold ude.</div>
    </ul>
    <div class='panel-heading'>§2 Regler</div>
    <ul class="list-group">
        <li class="list-group-item">§2.1 Der gives point per <b>Eliminations</b> - intet andet!</li>
        <li class="list-group-item">§2.2 Per <b>Eliminations</b> - 1 point</li>
        <li class="list-group-item">§2.3 Alle deltagere skal være tilstede under NLW</li>
        <li class="list-group-item">§2.4 De to hold må IKKE lande det samme sted</li>
        <div class="panel-body">
            <p>Lige så snart I kommer ind på startsøen, pinger din makker og dig jeres lokation I har tænkt jeg at lande. Det andet hold skal lande et andet sted. Man må altså ikke lande det samme sted. <br />Holdene aftaler imellem sig hvilket hold der vælger sted, og hvilket hold der derfor lander et andet sted.</p> </div>
        <li class="list-group-item">§2.6 Kampen slutter efter 3 games hvorefter holdet med flest <b>Eliminations</b> går videre</li>
    </ul>

    <div class='panel-heading'>§5 Snyd</div>
    <ul class="list-group">
        <li class="list-group-item">§5.1 Hvis du sabotere det andet hold, det betyder skyder det andet hold ned fra et højt sted uden grund til at skyde der, bliver din makker og dig diskvalificeret </li>
        <li class="list-group-item">§5.2 Det er op til deltagerne selv at påvise snyd, såfremt der er mistanke om dette. <br />Så snart mistanken opstår, bedes du kontakte Admin </li>
    </ul>
    <div class='panel-heading'>§6 Præmiepulje fordeling - Duo</div>
    <ul class="list-group">
        <li class="list-group-item">1. pladsen 1000 kr.</li>


        <!--  <li class="list-group-item">*Ved maksimal præmiepulje</li>  -->
    </ul>

</div>


<?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/includes/lower-body.php';?>
</body>
</html>