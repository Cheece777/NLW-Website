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
    <div class="panel-heading banner-custom"></div>
    <div class="panel-body">
      <p>Er der en turnering vi mangler at få med? Få hjælp af NLW's crew til at starte din egen turnering!</p>
      <button type="button" class="btn btn-default btn-block tournament-button center-block disabled">Tilmeld</button>
    </div>
    <div class='panel-heading'>§1 Format</div>
    <ul class="list-group">
      <li class="list-group-item">§1.1 Skaf spillere så der er til minimum 2-3 runder af spillet.</li>
      <li class="list-group-item">§1.2 Aftal med et crew medlem der har tid til at stå for den formelle del.</li>
      <li class="list-group-item">§1.3 Crew vil herfra udmelde at turneringen starter inden for en times tid og at tilmelding kan foregå ved crew bordet.</li>
    </ul>
    <div class='panel-heading'>§2 Præmie</div>
    <ul class="list-group">
      <li class="list-group-item">Alt efter størrelse og antal deltagere vil crew stille goder fra kiosken til som præmier.</li>
    </ul>
  </div>

  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/includes/lower-body.php';?>
</body>
</html>