<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1 col-lg-2"></div>
    <div class="col-sm-10 col-lg-8">
      
      <!-- ### HEADER ### -->
        <script type="text/javascript" src="webalizer/scripts.js"></script>

      <script src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/dist/js/jquery-1.12.4.min.js';?>"></script>
      <script src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/dist/js/bootstrap.min.js';?>"></script>
      
      <nav class="navbar navbar-default">
        <div class="container-fluid hidden-xs">
          <div class="row">
            <ul class="header-div">
              <li class="col-xs-8">
                <a href="/"><img class="img-responsive hidden-md hidden-sm hidden-xs" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/nlw-banner2.png';?>" alt="NLW Logo"><img class="img-responsive hidden-lg hidden-xs" src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/images/nlw-banner3.png';?>" alt="NLW Logo"></a>
              </li>
              <li class="col-xs-4">
                <ul class="header-right-div">
                  <li class="header-right-div-li">
                    <p><b><h2>NLW #19  <br> 23. - 25. marts</h2></b></p>
                  </li>
                  <li class="header-right-div-li">
                    
                    <!-- Display the countdown timer in an element -->
                    <b><h3><p id="demo"></p></h3></b>

                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Mar 23, 2018 18:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                      // Get todays date and time
                      var now = new Date().getTime();

                      // Find the distance between now an the count down date
                      var distance = countDownDate - now;

                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                      // Display the result in the element with id="demo"
                      document.getElementById("demo").innerHTML =days + "d " + hours + "t "
                      + minutes + "m " + seconds + "s ";

                      // If the count down is finished, write some text 
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "Velkommen!";
                      }
                    }, 1000);
                    </script>
                    
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/';?>">NLW</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a onclick="buyTicketFunc();" href="javascript:;"><b>Køb Billet</b></a></li>

                <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/generelt';?>">Generelt</a></li>
              <li class="dropdown">
                <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'#';?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Næste NLW<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/program';?>">Program</a></li>
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrencer';?>">Konkurrencer</a></li>
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/regler';?>">Regler og huskeliste</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'#';?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bagom NLW<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/crew';?>">Arrangører</a></li>
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/historie';?>">Historien om NLW</a></li>
                </ul>
              </li>
            </ul>

            <!-- Nav Bar right side -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/kontakt';?>">Kontakt</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        
      </nav>

