<?php

if(isset($_POST['submit']))
{
$name = $_POST["g1"];
$email = $_POST['g2'];
$phone = $_POST['g3'];
$pass = $_POST['g4'];

	$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


$q1 = "INSERT INTO sregister (NAME, EMAIL, PHONE, PASS) 
		VALUES ('$name', '$email', '$phone', '$pass')";

		
if($con->query($q1) === TRUE)
{
//	echo "record created";
    header("Location:llogin.php");
}
else
	echo "error".$con->error;

$con->close();
}


?>
<html>
<head>
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
  
<title>Student Register</title>
<link rel="stylesheet" href="css//sregister.css">   
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
    <!---<img class="img1" src="img/logo.png"> --->   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lregister.php"><font color="#000">Lecturer</font></a>
            <a class="dropdown-item" href="sregister.php"><font color="#000">Student</font></a>
        </div>
      </li>
<li>
        <a class="nav-link" href="llogin.php">login</a>
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
    
 <!------------------------sregister--------------->
 <section class="sregister">
       <div class="container">
       <div class="row">
       <div class="col-md-6">
           
           </div> 
       <div class="col-md-12 text-center">
           <div class="lead-form">
           <div class="signin">
           <h2>REGISTER HERE</h2>
               </div>
<form name="form2" action="sregister.php" method="post" onsubmit="return valid2()">
	<label class="lbl">Name*</label>
<input type="text" placeholder="name" class="input-box" name="g1" required>
    <label class="lbl">Email*</label>
<input type="email" placeholder="email" class="input-box" name="g2" required><br/>
    <label class="lbl">Phone*</label>
<input type="number" placeholder="phone" class="input-box" name="g3" pattern="[0-9]{10}" required><br/>
	<label class="lbl">Password*</label>
<input type="password" placeholder="uppercase,lowercase and a number" class="input-box" name="g4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br/>
    <label class="lbl">Confirm password*</label>
<input type="password" placeholder="re-enter" class="input-box" name="g5" required><br/>

<input type="submit" name="submit" class="submit-btn" value="Register"><br/><br/><br/>
    <font color="#000">Already have account?</font><a href="llogin.php" style="font-family:'Play', sans-serif;">&nbsp;Login</a><br/><br/>


</form>
               
</div>
       </div>
       </div> 
       </div>
       <!----<img src="" class="bottom-img">--->
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
   
 <script src="js/sregister.js"></script>   
    
</body>    
</html>




