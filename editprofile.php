<?php
	session_start();
	if(isset($_POST['submit']))
	{
		
		$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
			if($con->connect_error)
				die("Connection failed: " . $con->connect_error);
		$name = $_SESSION["name"];
		if(!$_FILES['im']['name']=="")
		{
			$target = "img/user/".basename($_FILES['im']['name']);
		//	echo basename($_FILES['im']['name']);
			$image = $_FILES['im']['name'];
			$que1 = "UPDATE `lregister` SET `IMG` = '$image' WHERE `lregister`.`PHONE` = '$name'";
			mysqli_query($con,$que1);
		
		/*	if(move_uploaded_file($_FILES['im']['tmp_name'],$target))
			{
			//	echo "success";
			$msg="successfully updated";
			}
			else
				echo "oh..shit";*/
		}
		$var = array("t1","t2","t3","t4","t5","t8","t6","t7");
		$field = array("NAME","EMAIL","PHONE","CATE","EXP","TIME","LOC","QUAL");
		
		for($val=0 , $val2=0 ; $val < count($var) ; $val++ , $val2++)
		{
		
			if(!($_POST[$var[$val]]==""))
			{
				$ind = $_POST[$var[$val]];
				if($val==5)
				{
					$tim1 = $_POST['t8'];
					$tim2 = $_POST['t9'];
					$ind = $tim1." to ".$tim2;
				}
				$que2 = "UPDATE lregister SET $field[$val2] = '$ind' WHERE PHONE = '$name' ";
				if( mysqli_query($con,$que2) )
				{
					if($val==2)
						$name = $_SESSION["name"] = $ind;
				//	echo $field[$val2]."updated";
				}
			}
		}
		
		mysqli_close($con);
		header("Location:profile.php");
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
  
<title>Edit Profile</title>
<link rel="stylesheet" href="css/editprofile.css">   
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

<!---------------edit form----------->
    <section class="edit">
       <div class="container">
       <div class="row">
       <div class="col-md-12 text-center">
           <div class="lead-form">
           <div class="signin">
            <br/><h3>EDIT YOUR PROFILE</h3>
            <br/>
               </div>
<form name="form4" method="post" action="editprofile.php" enctype="multipart/form-data">
    <br/> <center> <img class="img3" src="img/logo.png"></center>
  <span class="btn btn-file ">
    <img class="img4" src="img/Capture.PNG" height="30" width="30"/><input type="file" name="im" accept="image/*">
    </span>	
  <br/>
<label class="lbl">Name</label>
<input type="text" placeholder="Name" class="input-box" name="t1">
<label class="lbl">Email</label>
    <input type="email"  placeholder="Email" class="input-box" name="t2"><br/>
<label class="lbl">Phone</label>
<input type="number" placeholder="phone" class="input-box" name="t3"><br/>
    <label class="lbl">Category</label>
    <input type="text"  placeholder="Category" class="input-box" name="t4"><br/>
     <label class="lbl">Experience</label>
<input type="text"  placeholder="(in years)" class="input-box" name="t5"><br/>
     <label class="lbl">Location</label>
<input type="text"  placeholder="place" class="input-box" name="t6"><br/>
     <label class="lbl">Qualification</label>
<select class="input-box" name="t7">
  <option value="Inter">Inter</option>
    <option value="Diploma">Diploma</option>
    <option value="UG">UG</option>
	  <option value="PG">PG</option>
</select><br/>
    <label class="lbl">Available Timings</label><br/><br/>
<input type="time" class="input-box2" name="t8"> &nbsp; &nbsp; <input type="time" name="t9" class="input-box2"><br/>
    
<input type="submit" name="submit" class="submit-btn" value="submit"><br/><br/><br/>


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
    <script src="js/register.js"></script>

<!--------------smooth scroll---------------->
        <script src="smooth-scroll.js"></script>
        <script>
	            var scroll = new SmoothScroll('a[href*="#"]');
          </script>
   
    
    
</body>    
</html>



