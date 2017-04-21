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
        <title>TECHNICHE 17</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/material-cards.css">

    <link rel="stylesheet" href="css/freelancer.css">
    <link rel="stylesheet" media="screen" href="css/about.css">
    <link rel="stylesheet" media="screen" href="css/about-us.css">
    <link rel="stylesheet" media="screen" href="css/framework.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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

  .mc-btn-action
  {
    color: rgba(255,255,255,0.90);
    border-color: rgba(255,255,255,0.90);
  }

  .card {
    text-align:center;
     margin-right: 0%;
    margin-left: 0%;
    width: 100%;
    height: auto;
    background: rgb(247,108,108);
   box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .05s ease-out;
       box-shadow: .8px .9px 3px grey;
       padding-bottom: 5%;

  }

  .card img{width: 90%;
    /* position: relative; */
    margin-top: 5%;}
  .card:hover{
       box-shadow: 1px 8px 20px grey;
      -webkit-transition:  box-shadow .2s ease-in;
    }

    .name{
      font: 400 1.8em/1.2 'sofia-pro',sans-serif;
    color: white;
    margin-top: 5%;
    }

    .post
    {
      font: 300 1.4em/1.2 'sofia-pro',sans-serif;
    color: white;
    margin-top: 3%;
    text-transform: none;
    margin-bottom: 1%;
    }

    .list{
      font: 200 1.4em/1.2 'sofia-pro',sans-serif;
    color: white; margin-bottom: 5%
    }

    .fb
    {
      margin-bottom: 5%;
font: 400 1.2em/1.2 'sofia-pro',sans-serif;
color: white;
text-transform: uppercase;
    }

    .fb:hover
    {
      color: white;
    }

    h1{font: 400 20px 'sofia-pro',sans-serif;
  color:white;}
  li{font: 200 16px 'sofia-pro',sans-serif;
color:white;}
h2{font: 200 20px 'sofia-pro',sans-serif;
color:white; text-transform: none;}


    </style>
</head>


<body style="background-color: rgb(247,108,108)">
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
                      <a href="https://techniche.org/Techniche17/initiatives.php">Initiatives</a>
                  </li>
                  <li class="page-scroll ">
                      <a href="https://techniche.org/Techniche17/sponsors.php" >Sponsors</a>
                  </li>
                  <li class="page-scroll">
                      <a href="https://techniche.org/Techniche17/contact.php" style="color: #97c2d9;">Contact Us</a>
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



<section class="team" style="text-align:center;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description" style="font: 500 40px 'Playfair Display', serif; color: white;border:none; text-align: center; text-transform:none;">Meet the Heads</h6>
          <div class="row pt-md">
            <br><br>


            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/animesh.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/animeshjain1996?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Animesh Jain</h1>
              <h2>Convener</h2>
              <p><ul><li>+91 8011492051</li><li>animesh@techniche.org</li></ul></p>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/aziz.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/aziz.malik.7549?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Aziz Malik</h1>
              <h2>Head, Events Management</h2>

              <p><ul><li>+91 7896889352</li><li>aziz@techniche.org</li></ul></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/akshit.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/akshit200496"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Akshit Ughade</h1>
              <h2>National Events Coordinator</h2>
              <p><ul><li>+91 9819472606</li><li>akshit@techniche.org</li></ul></p>
            </div>
          </div>
            <div class="row" style="margin-top: 5%">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/umang.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/akshit200496?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Umang Pardhi</h1>
              <h2>Marketing Head</h2>


              <p><ul><li>+91 9085750182</li><li>umang@techniche.org</li></ul></p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/nikhil.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/profile.php?id=100000274718097&fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Nikhil Menghrajani</h1>
              <h2>Finance Head</h2>

              <p><ul><li>+91 7576918962</li><li>nikhil@techniche.org</li></ul></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/rishav.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/Rishav.agarwl?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Rishav Agarwal</h1>
              <h2>PR & Branding Head</h2>

              <p><ul><li>+91 8016084022</li><li>rishav@techniche.org</li></ul></p>
            </div>
            </div>
            <div class="row" style="margin-top: 5%">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/vinay.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/vinjam.vinay?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Vinay Vinjam</h1>
              <h2>Creative Head</h2>

              <p><ul><li>+91 8011492022</li><li>vinay@techniche.org</li></ul></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="img/goutham.png" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/goutham.a.ramanathan?fref=ts"><li><i class="fa fa-facebook"></i></li></a>

                </ul>
              </div>
              <h1>Goutham Ag</h1>
              <h2>Media Head</h2>

              <p><ul><li>+91 7896879532</li><li>goutham@techniche.org</li></ul></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            </div>
          </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');
            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');
                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');
                }, 800);
            } else {
                card.addClass('mc-active');
                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');
                }, 800);
            }
        });
    });
</script>


</body>
</html>
