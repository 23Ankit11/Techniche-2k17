<?php

   session_start();  
if(isset($_SESSION['login_user'])) {
   include('session.php');
  $loginhref = "";
  $login = '<img src="img/pro.png" style="position: absolute; top: 2%;">';  

   }
else{
 $loginhref = 'href = "login.php"';
  $login = 'login';
}

?>





<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Techniche is the annual Techno-Management festival of the Indian Institute of Technology Guwahati, India.">
    <meta name="author" content="WebOperations, Techniche">

    <!-- For Events animate cc-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style5.css">



    <title>TECHNICHE 17</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>

        <link rel="stylesheet" href="css/button.css">


    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Notification Bar-->
    <link rel="stylesheet" href="css/notif.css"></link>
    <script src="js/jquery1.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  

    <script>
     var flag1 = 0;
    var flag2 = 0;
    var flag3 = 0;
    var flag4 = 0;
    var flag5 = 0;
    var flag6 = 0;
    var flag7 = 0;
    var flag8 = 0;
    var flag9 = 0;
    var pos = 0;
    // Global Scripts
    	document.addEventListener("DOMContentLoaded", function(){
    
    });</script>
   
    <script>
    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
    function init() {
    	canvas = document.getElementById("canvas");
    	anim_container = document.getElementById("animation_container");
    	dom_overlay_container = document.getElementById("dom_overlay_container");
    	handleComplete();
    }
    function handleComplete() {
    	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
    	exportRoot = new lib.circle_events();
    	stage = new createjs.Stage(canvas);
    	stage.addChild(exportRoot);
    	stage.enableMouseOver();
    	//Registers the "tick" event listener.
    	fnStartAnimation = function() {
    		createjs.Ticker.setFPS(lib.properties.fps);
    		createjs.Ticker.addEventListener("tick", stage);
    	}
    	//Code to support hidpi screens and responsive scaling.
    	function makeResponsive(isResp, respDim, isScale, scaleType) {
    		var lastW, lastH, lastS=1;
    		window.addEventListener('resize', resizeCanvas);
    		resizeCanvas();
    		function resizeCanvas() {
    			var w = lib.properties.width, h = lib.properties.height;
    			var iw = window.innerWidth, ih=window.innerHeight;
    			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
    			if(isResp) {
    				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
    					sRatio = lastS;
    				}
    				else if(!isScale) {
    					if(iw<w || ih<h)
    						sRatio = Math.min(xRatio, yRatio);
    				}
    				else if(scaleType==1) {
    					sRatio = Math.min(xRatio, yRatio);
    				}
    				else if(scaleType==2) {
    					sRatio = Math.max(xRatio, yRatio);
    				}
    			}
    			canvas.width = w*pRatio*sRatio;
    			canvas.height = h*pRatio*sRatio;
    			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
    			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
    			stage.scaleX = pRatio*sRatio;
    			stage.scaleY = pRatio*sRatio;
    			lastW = iw; lastH = ih; lastS = sRatio;
    		}
    	}
    	makeResponsive(true,'both',false,1);
    	fnStartAnimation();
    }
    </script>
    <!--End of Animate CC-->

    <style>
    .preload{
         width: 100%;
        position: fixed;
        height: 100%;
        z-index: 1000000000;
        background-color: #97c2d9;
    }
    .loader{
      text-align: center;
      
    }
    #animation_container {
  	position:relative;
  	margin:auto;
  	left:0;right:0;
  	top:0;bottom:0;
    }

    .gif{
      display: block;
      position: absolute;
      height: auto;
      top: 30%;

      z-index: 100;
    }

    .scrl-btn{
      display: block;
      position: absolute;
      width: 40%;
      height: auto;
      top: 90%;

      z-index: 100;
    }


    .notif{

      font-family: 'sofia-pro',sans-serif;
      color: #212;
      display: block;
      position: absolute;
      width: auto;
      height: auto;

      left: 80%;
      z-index: 100;
      line-height: 1.6em;
    }

    .height1
    {
      top: 20%;
    }

    .height2
    {
      top: 30%;
    }

    .height3
    {
      top: 40%;
    }
    
    @media (max-width:700px)
    {#bs-example-navbar-collapse-1{min-height:240px;}}

    </style>

</head>

<body id="page-top" class="index" onload="init();" style="margin:0px; background-color: rgb(247,108,108);">

<div class="preload">
<div style="text-align: center;position: relative;top:25%">
      <img  class="loader" src="img/preloader.gif" height="50%">
</div>
</div>
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom scrl">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                  <a href="#page-top" class="norm"><img style="width: 200px; position:absolute; top: 15%;" src="img/logo.png"></a>
                  <a href="#page-top" class="phone"><img style="width: 44px; position:absolute; top: 6%;left: 2%" src="img/mobile_logo.png"></a>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                      <a href="https://www.techniche.org/techportal">Be a Techrep</a>
                    </li>

                    <li class="page-scroll">
                        <a href="initiatives.php">Initiatives</a>
                    </li>

                    <li class="page-scroll">
                        <a href="">Sponsors</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="contact.php">CONTACT US</a>
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

    <!-- Return to Top -->
<a href="#page-top" id="return-to-top"><i class="icon-chevron-up"></i></a>
<a href="#contact" id="down-to-contact"><i class="icon-chevron-down"></i></a>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="css/scroll-top.css" rel="stylesheet">
<script>
// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);
           // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);
          // Else fade out the arrow
    }
});
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50 && $(this).scrollTop() <=1600 ) {        // If page is scrolled more than 50px
        $('#down-to-contact').fadeIn(200);
           // Fade in the arrow
    } else {
        $('#down-to-contact').fadeOut(200);
          // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('html, body').stop().animate({
      scrollTop: 0
  }, 1250, 'easeInOutExpo');

});

$('#down-to-contact').click(function() {      // When arrow is clicked
  $('html, body').stop().animate({
      scrollTop: 2000
  }, 1250, 'easeInOutExpo');
});





</script>




    <!-- Header -->
    <header class="scrl">

                  <!-- Techniche -->
                    <img id="homeimg11" src="gif/home1_1.gif" class="gif left">
                     <img id="homeimg22" src="gif/home2_2.gif" class="gif left">
                    




                  <!-- particles.js container -->
                  <div id="particles-js" style="display: block;">
                   </div>

                  <!-- scripts -->
                  <script src="js/particles.js"></script>
                  <script src="js/app.js"></script>

                  <!-- stats.js -->
                  <script src="js/lib/stats.js"></script>

                  <!--Notifications-->
                  <div class="notify" hidden>
                  <a href=""><div class="notice info notif height1"><p>Techniche website is out!!</p></div></a>
                  </div>
                  <!--Scroll Down-->
                  <span class="scroll-btn scrl-btn left" id="scrollbtnn">

		<span class="mouse">
			<span>
			</span>
		</span>



</span>




    </header>

    <!--For Phone -->
    <section id="portfolio" class="portnormal" style="background-color: rgb(247,108,108);">
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00); width:1500px; height:1000px">
        <img src="gif/LS_1.gif" class="set1" style="width: 25%; position: absolute; left: 37%; top: 30%;">
        


            <canvas id="canvas" width="1500" height="1000" style="position: absolute; display: block; background-color:rgba(102, 102, 255, 0.00);"></canvas>
            <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1500px; height:1000px; position: absolute; left: 0px; top: 0px; display: block;">
            </div>
        </div>
    </section>


    <!-- Portfolio Grid Section -->
    <div class="portmobile">
    <section id="portfolio" style="background-color: rgb(247,108,108);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Lecture Series</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/LS_1.gif" class="set1" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">The Lecture Series serves as a platform to inspire and motivate thousands of young minds across the world by connecting them with the pioneers in various fields.<br/><br/></p><a href="https://www.techniche.org/Techniche17/ls.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(250, 171, 171)">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Industrial Conclave</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/IC_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">The Industrial Conclave is a one-of-a-kind platform connecting entrepreneurship enthusiasts to industrial big-wigs and visionaries.<br/><br/></p><a href="https://www.techniche.org/Techniche17/ic.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(124, 204, 190);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Exhibitions</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/exhibitions_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">The Exhibitions at Techniche, play host to technologically advanced and futuristic innovations and projects from all around the globe.<br/><br/></p><a href="https://www.techniche.org/Techniche17/exhibitions.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(151, 194, 217);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Workshops</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/workshops_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">With the best technical experts and interaction among students sharing common interest, the workshop help delve deeper into the subject.<br/><br/></p><a href="http://techniche.org/Techniche17/workshops.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(177,192,203);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Competitions</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/competitions_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">We are delighted to present a diverse range of competitions where you will encounter a counter enemy within you. So stay calm and take part in our competitions.<br/><br/></p><a href="https://www.techniche.org/Techniche17/competitions.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(112,209,170);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Model United Nations</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/mun_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">Model United Nations is a three day conference for students of all ages to actively participate in a simulated version of the United Nations.<br/><br/></p><a href="https://www.techniche.org/Techniche17/mun.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(64,61,102);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">TechExpo</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/Techexpo_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">TechExpo is the annual project showcasing event hosted by Techniche. It has been initiated with the sole purpose of bringing to light the technological advancements made by the youth of the country.<br/><br/></p><a href="https://www.techniche.org/techexpo"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(78,97,189);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Funniche</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/Funniche_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 8px;padding-right: 8px;">Want to have loads of fun? walk into the 'FUNNICHE' section. Spend an awesome day out experiencing some of the most crazy activities and games on offer.<br/><br/></p><a href="https://www.techniche.org/Techniche17/funniche.php"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    <section id="portfolio" style="background-color: rgb(124,204,190);">
    <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">
                <h4 style="color:#fff;text-transform: capitalize;">Events</h4><br/>
                <h2 style="font-size: 32px;color: #fff;text-transform: capitalize;">Technothlon</h2><br/><br/></div>
        </div>
      <div id="animation_container" style="background-color:rgba(102, 102, 255, 0.00);text-align: center;">
        <img src="gif/Technothlon_1.gif" class="set2" style="left: 37%;"><br/><br/><br/>
            </div>
            <div class="row">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;padding-top: 20px;">
                <p style="color: #fff;padding-left: 12px;padding-right: 12px;">Technothlon is an international school championship organized by the students faternity of IIT Guwahati.<br/><br/></p><a href="https://techniche.org/technothlon"><button class="btn btn-primary">Read More</button></a></div>
        </div>
    </section>
    </div>



    <!-- Contact Section -->
    <section id="contact" class="scrl" style="background-color: rgb(78,97,189);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="margin-bottom: 50px; color: #fff">Write to Us</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" method="post" action="write_us.php" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="color: white">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name." style="color: #2c3e50">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="color: white">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address." style="color: #2c3e50">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="color: white">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." style="color: #2c3e50">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="color: white">Message</label>
                                <input rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message." style="color: #2c3e50">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="btn btn-success btn-lg" value="Send" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="row" id = "ashu">
          <div class='col-md-6 col-md-offset-3' style="text-align: center;">

          <div class="footer-social-icons">

      <ul class="social-icons">
          <li><a href="https://www.facebook.com/techniche.iitguwahati/" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/techniche_iitg" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/techniche/" class="social-icon"> <i class="fa fa-instagram"></i></a></li>

      </ul>
    </div>
  </div>




     </div>


    </section>

    <!-- Footer -->
    <!--footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
     <script type="text/javascript">

    
    $(window).bind("load", function() { 
              $('.preload').delay(3500).fadeOut(); 
      });
 </script>
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.js"></script>

    <!-- Animate CC Events-->
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="js/home_events.js"></script>
    <script src="js/index.js"></script>

</body>

</html>
