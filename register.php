<?php

session_start();
include('config.php');

include('session.php');
ini_set("display_errors", 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);

$next = $_GET['next'];

if(!isset($_SESSION['login_user'])) {
      header("location:login.php?next=$next");
   }


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["register"])) {

	  $event = mysqli_real_escape_string($db,$_POST['event']);
	  $teamname = mysqli_real_escape_string($db,$_POST['teamname']);
	  $collegename = mysqli_real_escape_string($db,$_POST['collegename']);
	  $teamleader = mysqli_real_escape_string($db,$_POST['teamleader']);
	  $contact1 = mysqli_real_escape_string($db,$_POST['contact1']);
	  $email1 = mysqli_real_escape_string($db,$_POST['email1']);
	  $postaladdress1 = mysqli_real_escape_string($db,$_POST['postaladdress1']);
	  $teammember2 = mysqli_real_escape_string($db,$_POST['teammember2']);
	  $contact2 = mysqli_real_escape_string($db,$_POST['contact2']);
	  $email2 = mysqli_real_escape_string($db,$_POST['email2']);
	  $postaladdress2 = mysqli_real_escape_string($db,$_POST['postaladdress2']);
	  $teammember3 = mysqli_real_escape_string($db,$_POST['teammember3']);
	  $contact3 = mysqli_real_escape_string($db,$_POST['contact3']);
	  $email3 = mysqli_real_escape_string($db,$_POST['email3']);
	  $postaladdress3 = mysqli_real_escape_string($db,$_POST['postaladdress3']);
	  $teammember4 = mysqli_real_escape_string($db,$_POST['teammember4']);
	  $contact4 = mysqli_real_escape_string($db,$_POST['contact4']);
	  $email4 = mysqli_real_escape_string($db,$_POST['email4']);
	  $postaladdress4 = mysqli_real_escape_string($db,$_POST['postaladdress4']);
	   
          
	   if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	  } 
	 
	 


//	  $sql = 'INSERT INTO competitions '.'( event, teamname, collegename, teamleader, contact1, email1, address1, member2, contact2, email2, address2, member3, contact3, email3, address3, member4, contact4, email4, address4 ) //'.'VALUES ("' . $event . '","' . $teamname . '","' . $collegename . '","' . $teamleader . '","' . $contact1 . '","' . $email1 . '","' . $postaladdress1 . '","' . $teammember2 . '","' . $contact2 . '","' . $email2 . '","' . //$postaladdress2 . '","' . $teammember3 . '","' . $contact3 . '","' . $email3 . '","' . $postaladdress3 . '","' . $teammember4 . '","' . $contact4 . '","' . $email4 . '","' . $postaladdress4 . '")';

	  
	  $get_id = "SELECT id FROM participants WHERE email = '".$login_session."'";
	  $details_r = $db->query($get_id);
	 $details = $details_r->fetch_assoc();

    	$participant_id = $details["id"];
	  $sql = 'INSERT INTO competitions '.'( participant_id, event, teamname, collegename, teamleader, contact1, email1, address1, member2, contact2, email2, address2, member3, contact3, email3, address3, member4, contact4, email4, address4 ) '.'VALUES ("' . $participant_id . '","' . $event . '","' . $teamname . '","' . $collegename . '","' . $teamleader . '","' . $contact1 . '","' . $email1 . '","' . $postaladdress1 . '","' . $teammember2 . '","' . $contact2 . '","' . $email2 . '","' . $postaladdress2 . '","' . $teammember3 . '","' . $contact3 . '","' . $email3 . '","' . $postaladdress3 . '","' . $teammember4 . '","' . $contact4 . '","' . $email4 . '","' . $postaladdress4 . '")';

	$db->query($sql);


         
      header("location: robotics.php");

}




?>





<html >
<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="loginstyle.css">

  
</head>

<body>
  <div class="content">
	
	<div class="wrapper">

		
	<div class="register--content--competitions">
		
		
		
		

	<form action="" method="post">
			
		<div class="form-group">
			<select class="inputText" required id="event" name="event">
			<option value>Select event</option>
			<option value="escalade">Escalade</option>
			<option value="robocalypse">Robocalypse</option>
			<option value="nautilus">Nautilus</option>
			<option value="burnout">Burnout</option>
			<option value="phototron">Phototron</option>	
			</select>
		</div>
		<div class="name">
		  <input name="teamname" type="text" class="inputText" required/>
		  <span class="floating-label">Team name</span>
		</div>
		
		<div class="name">
		  <input name="collegename" type="text" class="inputText" required/>
		  <span class="floating-label">College name</span>
		</div>

		<div class="name">
		  <input name="teamleader" type="text" class="inputText" required/>
		  <span class="floating-label">Name of Team Leader</span>
		</div>
									
		<div class="name">
		  <input name="contact1" type="text" class="inputText" required/>
		  <span class="floating-label">Contact</span>
		</div>
				
		<div class="email">
		  <input name="email1" type="email" class="inputText" required/>
		  <span class="floating-label">email</span>
		</div>

		<div class="name">
		  <input name="postaladdress1" type="text" class="inputText" required/>
		  <span class="floating-label">Postal Address</span>
		</div>
		<div class="name">
		  <input name="teammember2" type="text" class="inputText" />
		  <span class="floating-label">Team Member 2</span>
		</div>
		<div class="name">
		  <input name="contact2" type="text" class="inputText" />
		  <span class="floating-label">Contact</span>
		</div>
				
		<div class="name">
		  <input name="email2" type="email" class="inputText" />
		  <span class="floating-label">email</span>
		</div>

		<div class="name">
		  <input name="postaladdress2" type="text" class="inputText" />
		  <span class="floating-label">Postal Address</span>
		</div>
		<div class="name">
		  <input name="teammember3" type="text" class="inputText" />
		  <span class="floating-label">Team Member 3</span>
		</div>
		<div class="name">
		  <input name="contact3" type="text" class="inputText" />
		  <span class="floating-label">Contact</span>
		</div>
				
		<div class="name">
		  <input name="email3" type="email" class="inputText" />
		  <span class="floating-label">email</span>
		</div>

		<div class="name">
		  <input name="postaladdress3" type="text" class="inputText" />
		  <span class="floating-label">Postal Address</span>
		</div>
		<div class="name">
		  <input name="teammember4" type="text" class="inputText" />
		  <span class="floating-label">Team Member 4</span>
		</div>
		<div class="name">
		  <input name="contact4" type="text" class="inputText" />
		  <span class="floating-label">Contact</span>
		</div>
				
		<div class="name">
		  <input name="email4" type="email" class="inputText" />
		  <span class="floating-label">email</span>
		</div>

		<div class="name">
		  <input name="postaladdress4" type="text" class="inputText" />
		  <span class="floating-label">Postal Address</span>
		</div>


		<input type="submit" class="register-buttton" value="Register" name="register">	
	</form>		
	</div>	
		
		
	
	
  </div>
	
	<div class="registred">
		<h1>Registration Successful</h1>
		<button class="reset">Reset</button>
	</div>
	
	
</div>
  <script>
  $(".register-buttton").click(function(e) {
  e.preventDefault();
    $(".registred").slideDown(600);
       $(".wrapper").slideUp(600);
});
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>


</body>
</html>
