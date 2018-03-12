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
        <h2 class="panel-title">Arrangører</h2>
      </div>
      <div class="panel-body">
        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/thm.png';?>" alt="Tobias Hvass Mølbak">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Tobias Hvass Mølbak</b></h4>
                <ul>
                  <li>Game tag: Bille</li>
                  <li>Alder: <?php echo date_diff(date_create('1993-04-17'), date_create('today'))->y;?></li>
                  <li>Opsætningsansvarlig og teknisk support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/mhj.png';?>" alt="Mathias Huse Jensen">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Mathias Huse Jensen</b></h4>
                <ul>
                  <li>Game tag: Cheece</li>
                  <li>Alder: <?php echo date_diff(date_create('1993-03-30'), date_create('today'))->y;?></li>
                  <li>Hovedplanlægning og kontaktperson</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/fhj.png';?>" alt="Frederik Huse Jensen">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Frederik Huse Jensen</b></h4>
                <ul>
                  <li>Game tag: Nuzz</li>
                  <li>Alder: <?php echo date_diff(date_create('1996-02-21'), date_create('today'))->y;?></li>
                  <li>Hovedansvarlig ved arrangementet</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/anh.png';?>" alt="Andreas Nødgaard Hansen">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Andreas Nødgaard Hansen</b></h4>
                <ul>
                  <li>Game tag: d1PS</li>
                  <li>Alder: <?php echo date_diff(date_create('1996-02-21'), date_create('today'))->y;?></li>
                  <li>Konkurrenceansvarlig</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
            
        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/as.png';?>" alt="Anders Staghøj">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Anders Staghøj</b></h4>
                <ul>
                  <li>Game tag: Staghøj</li>
                  <li>Alder: <?php echo date_diff(date_create('1995-11-10'), date_create('today'))->y;?></li>
                  <li>Udendørs konkurrencer og nattevagt</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/cm.png';?>" alt="Christian Mølholm">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Christian Mølholm</b></h4>
                <ul>
                  <li>Game tag: barcandy</li>
                  <li>Alder: <?php echo date_diff(date_create('1995-09-07'), date_create('today'))->y;?></li>
                  <li>Konkurrenceansvarlig</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/fv.png';?>" alt="Frederik Vollstedt">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Frederik Vollstedt</b></h4>
                <ul>
                  <li>Game tag: Vollstedt</li>
                  <li>Alder: <?php echo date_diff(date_create('1996-09-12'), date_create('today'))->y;?></li>
                  <li>Trackmania ansvarlig</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default col-md-6">
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/crew/mt.png';?>" alt="Martin Thode">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><b>Martin Thode</b></h4>
                <ul>
                  <li>Game tag: Thode</li>
                  <li>Alder: <?php echo date_diff(date_create('1996-03-11'), date_create('today'))->y;?></li>
                  <li>Indkøbs- og konkurrence ansvarlig</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/includes/lower-body.php';?>
</body>
</html>