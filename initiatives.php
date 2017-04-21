<?php
   session_start();  

if(isset($_SESSION['login_user'])) {
  // include('session.php');
  $loginhref = "";
  $login = '<img src="img/pro.png" style="position: absolute; top: 2%;">';  

   }
else{
 $loginhref = 'href = "login.php"';
  $login = 'login';
}


?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/material-cards.css">

    <title>TECHNICHE 17</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/ini.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="css/freelancer.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <style>
    .navbar-custom .navbar-nav li a:hover {
      color: #97c2d9;
    }
    .navbar-custom .navbar-nav li.active a {
      color: #97c2d9;
      background-color: rgba(44,62,80,0);

    }
    .navbar-custom {
      padding: 10px 0;
      background-color: rgba(44,62,80,1);
      box-shadow: 0px 3px 15px rgba(33,33,33,0.5);
    }
    .navbar-custom .navbar-brand {
      font-size: 1.5em;
    }
  }




    </style>
</head>
<body style="background-color: rgb(151,194,217); color:#212121;">
  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom scrl" style="position: fixed; z-index: 100;">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
                <a href="https://www.techniche.org/Techniche17/index.php"><img style="width: 200px; position:absolute; top: 15%;" src="img/logo.png"></a>

          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li class="page-scroll">
                    <a href="https://techniche.org/techportal">Be a Techrep</a>

                  </li>

                  <li class="page-scroll">
                      <a href="https://techniche.org/Techniche17/initiatives.php" style="color: #97c2d9;">Initiatives</a>
                  </li>
                  <li class="page-scroll ">
                      <a href="https://techniche.org/Techniche17/sponsors.php" >Sponsors</a>
                  </li>
                  <li class="page-scroll">
                      <a href="https://techniche.org/Techniche17/contact.php" >Contact Us</a>
                  </li>

                  <li class="page-scroll">
                      <a <?php print $loginhref ?> ><?php print $login; ?></a>
                  </li>


              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>


  <div class="container" style="margin-top: 10%">

      <div class="row">
          <div class="box" style="padding-bottom: 5px;">
              <div class="col-lg-12 text-center">
                  <div id="carousel-example-generic" class="carousel slide">
                      <!-- Indicators -->
                      <ol class="carousel-indicators hidden-xs">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                          <div class="item active">
                              <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                          </div>
                          <div class="item">
                              <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                          </div>
			  <div class="item">
                              <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                          </div>	
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="icon-prev"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="icon-next"></span>
                      </a>
                  </div>


                  <h1 class="brand-name">Techniche Social Initiatives</h1>

              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">
                      <strong>Muskaan</strong>
                  </h2>


                  <hr class="visible-xs">
                  <p>‘A smile is a curve that sets everything right’, it is said. With the aim to spread smiles across little ones near us, and to help make their lives better in a small way, Techniche started the ‘Muskaan’ initiative.
Muskaan was conducted during the Diwali, the festival of lights with the aim to spend time with children and celebrate the festival with them. Children from nearby orphanage were invited in the campus and what followed was a lively morning with students of the campus meeting and interacting with these children, playing games with them and talking to them. Painting and other competetions were organised for the kids by the Techniche Team in which the kids were excited to participate. Apart from this, the kids were given different kinds of goodies and stationery items. The students were overwhelmed with joy looking at the smiles on the faces of the tiny tots and true to the name, the event was successful in leaving a ‘Muskaan’ on the faces of everybody present.
</p>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">
                      <strong>Pragati</strong>
                  </h2>

                  <p>“My humanity is bound up in your humanity” – Desmond Tutu</p>
                  <p>We at Techniche believe that it is everybodys responsibility to give back to the society in whatever small way we can and with this belief, we started ‘Pragati’, an initiative wherein we hope to contribute to the societal well-being of those around us.</p>
                  <p>One of the primary aims of Techniche is to contribute significantly to the society to empower the spirit of social well-being and undertake various activities for the same. These activities are aimed at catering to the needs of the less fortunate and doing their small bit in bringing smiles to their faces and happiness to their lives. They organize various initiatives that provoke for the betterment of the society. Pragati is a social initiative taken up by Techniche to lighten the lives of underprivileged people of all ages, with special focus on the school students. Under this initiative, various villages like Lathiya bagicha, Hajo are adopted.
                  </p>
                <p>The activities undertaken as a part of Pragati this year are:</p>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">Pragati -
                      <strong>Career Guidance Workshop</strong>
                  </h2>

                  <p>For a country whose majority of the population is its youth, a significant number of them do not receive proper guidance and help when it comes to choosing their career. With a mission to tackle this problem among those around us, Techniche carried out Career Guidance Workshops. </p>
                  <p>As a part of Pragati this year, various groups of students went to numerous schools in nearby villages to conduct informal career guidance and future counselling workshops for the students. </p>
                  <p>The sessions had a very good and interested participation from the students and various topics likes fields of study, time management and stress management were discussed with the students of IITG providing motivation and advices wherever necessary.
                  </p>

              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">Pragati -
                      <strong>Workshops on Cashless India</strong>
                  </h2>

                  <p>With the nation making strides towards a majorly cashless economy under our prime minister, we at Techiniche tackled this problem at the grassroots level by helping people better understand the advantages of such an economy and demonstrating the basics to them.</p>
                  <p>Workshops were conducted in various villages giving the participants a push towards the usage of e-banking and other e-commerce services so as to help realise the dream of a cashless India in the near future. The main aim of these workshops was to motivate the participants towards the digitalization of everyday transactions through various mediums. This was achieved by demonstrations of such transactions as well as explaining the steps involved in the same, thus effectively displaying the ease and convenience of the same.
</p>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">Pragati -
                      <strong>LEDs</strong>
                  </h2>

                  <p>A student today is focused on answering the “What” questions than the “Why” questions. In order to instill curiosity and a knack to find out why and how things happen among younger students, Techniche conducted LED sessions among various schools.</p>
                  <p>LED sessions were conducted in various schools which constituted of interactive seeions with the students of lower classes wherein both the volunteers and the students performed science experiments that are in their curriculum and discussed the science behind them. The kids very enthusiastic for the same their enthusiasm showed in the answers that were received when asked about the various aspects behind the experiments themselves.</p>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">

                  <h2 class="intro-text text-center">Pragati -
                      <strong>Surveys</strong>
                  </h2>

                  <p>In a country with a huge population, one of the key difficulties to problem solving is the lack of raw data. Techniche set out to conduct surveys to judge the economic conditions of people among various villages to address this problem in a small way.</p>
                  <p>Surveys have been conducted at various villages covering hundreds of households that aim at judging the common standard of living and the economic conditions of the villagers. The questionnaire included various questions relating to the available necessities, difficulties faced and the economic situations of the household. Through these surveys, the team aims to plan for the future development of these villages and forward the results of the same to the Government who can take appropriate and necessary action.
</p>
              </div>
          </div>
      </div>

  </div>
  <!-- /.container -->



  <!-- jQuery -->
  <script src="js/jquery_ini.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/ini.js"></script>

  <!-- Script to Activate the Carousel -->
  <script>
  $('.carousel').carousel({
      interval: 5000 //changes the speed
  })
  </script>

</body>
</html>
