<?php

	require("PHPMailer_5.2.4/class.phpmailer.php");
	session_start();
	
	
	$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
//	$con= new mysqli("localhost","root","","lecture");
	if($con->connect_error)
		die("Connection failed: " . $con->connect_error);
	
	
	if(isset($_POST['reserve']))
	{
		$cat = $_POST['cat'];
		$loc = $_POST['loc'];
		$tim = $_POST['t1'] . " to " . $_POST['t2'];
		$phone = $_SESSION["name"];
		$q1 = "SELECT * FROM sregister WHERE PHONE='$phone' ";
		$res = mysqli_query($con,$q1);
		$row = $res->fetch_assoc();
		$name = $row['NAME'];
		$num =  $_SESSION["num"];
		$q5 = "SELECT NAME FROM lregister WHERE PHONE='$num' ";
		$res2 = mysqli_query($con,$q5);
		$row2 = $res2->fetch_assoc();
		$na = $row2['NAME'];
	
		
		$mail = new PHPMailer();
		
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->From='certihire030507@gmail.com';
					$mail->Port=465;
					$mail->Host="smtp.gmail.com";
					$mail->SMTPSecure= "ssl";
					$mail->SMTPAuth=true;
					$mail->Username = 'certihire030507@gmail.com';
					$mail->Password ='CertiHire030507*';
					$mail->AddAddress('sandysai0507@gmail.com','Admin');
					$mail->FromName="Guest Lecture";
					$mail->isHTML(true);
    
				$mail->Subject="Reserve";
				
				$mail->Body="<p>Dear Admin,<br/><br/><h3>Student Name : Mr.$name<br/> Phone : $phone </h3><br/> has reserved the lecturer<br/><br/><h3>Lecturer Name :  $na<br/>Phone : $num<br/> Category : $cat <br/> Timings : $tim <br/> Location : $loc</h3></p>";
     
				$mail->AltBody="..........";
    
    if($mail->send())
    {
        echo "we will catch you soon";
    }  
	}



?> 


<html>
<head>
    <link rel="stylesheet" href="css/reserveform.css">
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!---<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">--->
  
<title>Reserve Form</title>

<!----------sai----------->    
<!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
 
</head>
<body>
  <section id="nav-bar">
           
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h3>&nbsp;&nbsp;FIND LECTURER</h3></a>
    <!---<img class="img1" src="img/logo.png">--->  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="userview.php">Lecturers</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
    </ul>
  </div>
</nav> 
</section>
    

    
    <section class="reserve">
       <div class="container">
       <div class="row">
           
    
       <div class="col-md-12 text-center">
           <div class="lead-form">
           <div class="res">
            <h1></h1>
               </div>
    
    <form method="post" action="reserve.php">
    <label class="lbl1">Category</label>
<select name="cat" class="input-box" required>
<option value="Engineering">Engineering</option>
<option value="Medicine">Medicine</option>
</select> <br/>
    <label class="lbl1" >Location</label>
<input type="text" placeholder="location" class="input-box" name="loc" required><br/>
    
      <label class="lbl1">Available Timings</label><br/><br/>
<input type="time" class="input-box2" name="t1" required> &nbsp; &nbsp; <input type="time" required class="input-box2" name="t2"><br/>
    <input type="submit" class="submit-btn" name="reserve" value="Reserve"><br/><br/><br/>
        </form>
   
</div>
       </div>
       </div> 
        </div>
   </section>
    
    <!-------------------contact-------------------->
<div class="contact" id="contact"> 
<div class="container text-center">
    <h3>Contact us</h3><hr> 
<p class="text-center"></p>    
<div class="row">
<div class="col-md-4">
<br/><i class="fa fa-map-marker"></i>
<p>SVS CREATIONS</p>    
</div>    
<div class="col-md-4">
<br/><i class="fa fa-phone"></i>
<p>9000826971</p>    
</div> 

    <div class="col-md-4">
    <h5> Follows on Social Media</h5>
  <div class="socials">
     <ul>
         <a href="https://www.facebook.com/vikramsaisandeep/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
         <a href="https://www.instagram.com/sai_kri003/?hl=en"><i class="fa fa-instagram"></i></a>
         <a href="www.gmail.com"><i class="fa fa-envelope"></i></a>
     </ul>
     </div>  
</div> </div><br/>    
</div>   
</div>
 



   
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> 
    
    
 <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <!--<script src="lib/bootstrap/js/bootstrap.min.js"></script>--->
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <!--<script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File --->
  <script src="js/main.js"></script>
    

<!--------------smooth scroll---------------->
        <script src="smooth-scroll.js"></script>
        <script>
	            var scroll = new SmoothScroll('a[href*="#"]');
          </script>
    
 </body>
</html>