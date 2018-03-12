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
      <!-- Default panel contents -->
        <div class="panel-heading">Program oversigt for NLW #18</div>
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#fredag">Fredag</a></li>
          <li><a data-toggle="tab" href="#lørdag">Lørdag</a></li>
          <li><a data-toggle="tab" href="#søndag">Søndag</a></li>
        </ul>

        <div class="tab-content">
          <div id="fredag" class="tab-pane fade in active">
            <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/program-includes/fredag.php';?>
          </div>
          <div id="lørdag" class="tab-pane fade">
            <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/program-includes/lordag.php';?>
          </div>
          <div id="søndag" class="tab-pane fade">
            <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/program-includes/sondag.php';?>
          </div>
        </div>
      </div>
    </div>

  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/includes/lower-body.php';?>
</body>
</html>