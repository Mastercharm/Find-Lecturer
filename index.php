<?php

	session_start();
		$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
		//	$con= new mysqli("localhost","root","","lecture");
		if($con->connect_error)
				die("Connection failed: " . $con->connect_error);
if(isset($_POST['sub']))
	{
		$se = $_POST['se'];
		$qu2 = "SELECT * FROM lregister WHERE CATE LIKE '%$se%' OR NAME LIKE '%$se%' ";
		$res = mysqli_query($con,$qu2);
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
  
<title>FIND LECTURER</title>
<link rel="stylesheet" href="css/index.css">   
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
        <a class="nav-link" href="#top">Home</a>
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
       <li class="nav-item">
        <a class="nav-link" href="llogin.php">Login</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="userview.php">Lecturers</a>
		</li>
      <li class="nav-item">
        <a class="nav-link" href="#About1">About us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
	  	<?php 
						if(isset($_SESSION["name"]))
						{  ?>
					        <li class="nav-item">
        <label class="lab"> <?php echo $_SESSION["na"]; ?> </label> 
        </li>
        <li class="nav-item">
        <div class="dropdown">    
			<input type="image" class="dropbtn" onclick="myFunction()" src="img/logo.png" height="30px" width="30px"/><br/>
			<div id="myDropdown" class="dropdown-content">
			<form action="profile.php"method="post">
				<input type="submit" value="Logout" class="b" name="log">
			</form>
			</div>
		</div>            
        </li>  
						<?php } ?>
    </ul>
  </div>
</nav> 
</section>
<!-------------------Home section---------------->
   <section id="Home">
       <div class="container">
       <div class="row">
       <div class="col-md-12 text-center"> 
        <!--<p class="promo-title"><i><font color="#000000">Hello,Guys..!</font></i></p><br/>--->
       <br/><br/> <p class="promo-title1"><b>A PLATFORM TO FIND YOUR DESIRED LECTURER..!</b></p><br/>
        <p class="promo-title0"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;<font face="Algerian">IN LEARNING YOU WILL TEACH<br/>&nbsp;&nbsp;AND IN TEACHING YOU WILL LEARN</font>&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></p>
           <p class="promo-title0"><b>― Phil Collins</b></p>

        <div class="promo-title2">
                  
            <button class="btn-find" onclick="openForm()">find lecturer</button>
       
           <div class="lead-form" id="Form">
           <form name="f" action="userview.php" method="post">
	      <br/><label class="lb">Lecturer name</label>
           <input type="text" placeholder="Enter Lecturer name" name="se" class="ib">
	      <!---<label class="lb">Category</label>
          <select name="cate" class="ib" >
          <option value="1" disabled selected name="cat">Select category</option>     
          <option value="engineering">Engineering</option>
        <option value="medicine">Medicine</option>
		<option value="motivational speaker">Motivational Speaker</option>
               </select> -->
         <input type="submit" class="submit-btn1" name="sub" value="Search"><br/><br/><br/>
         </form>
              
               </div> 
            
           <div class="dropdown">
          <button class="dropbtn">register</button>
        <div class="dropdown-content">
         <a href="lregister.php"><button class="reg">Lecturer</button></a>
          <a href="sregister.php"><button class="reg">Student</button></a>
    
          </div>
            </div>
</div> 
           </div>  
           
       </div>
       </div> 
      
   </section>
    <!----------------About section-------------------->
     <section id="About1">
     <div class="container">
         <font face="Algerian"><h1 class="title text-center">ABOUT US</h1></font><hr>
         
     <div class="row">
     <div class="col-md-6 About1"><h2>WHY THIS SITE ??</h2><br/>
     <p>Find Lecturer is a platform to find your desired Lecturer with one click. <br/>Normally, In many colleges there will be workshops,seminars,motivational classes. To guide and teach such aspects we need a Lecturer. The one who organize those events need to search Guest Lecturer for rental to teach the students.</p>
         <p>Find Lecturer is the best source to find your desired lecturer with your required category at your budget level. </p>
         
         
     </div>
     <div class="col-md-6 About1">
     <img src="img/what1.jpg" class="about1">
         </div></div></div>
         <div class="container"><hr>
         <div class="row">
     <div class="col-md-6 About1">
     <img src="img/about.jpg" class="about1">
     </div>
     <div class="col-md-6 About1"><h2>WHO WE ARE ??</h2><br/>
     <p>We the students of JNTU have designed Find Lecturer which is our mini startup. Here, we are experienced and emerging developers who are experts in web designing. We are offering exceptional services to our clients across the Telangana.</p>
         The main ambition of us to grow our startup at highlevel by satisfying our clients to find their desired Lecturer to their budget level. <br/>
         <p>Find Lecturer is a team effort, and each of our key members is well qualified and experienced in their respective fields.</p>
         </div>  
     </div>
     </div>
     </section>
   

    
    
     <!-----------------our team------------------>   
     <!--
      <section id="about" class="about-mf sect-pt4 route">  
             <b><h2>OUR TEAM</h2></b>  
    <div class="container">
      <div class="row">
        <div class="col-sm-12"> 
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-sm-4 col-md-5">
                    <div class="about-img">
                      <img src="img/sai.jpg" class="img-fluid ">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <div class="about-info">
                      <p><span class="title-s"><b>Name:</b></span><span class="ss">Saikrishna</span></p>
                      <p><span class="title-s"><b>Profile:</b></span><span class="ss">FrontendDeveloper</span></p>
                      <p><span class="title-s"><b>Email:</b></span><span class="ss">saikrishna.kandhagatla. 5@gmail.com</span></p>
                      <p><span class="title-s"><b>Phone:</b></span><span class="ss">9000826971</span></p>
                    </div>
                  </div>
                    
                </div>
                </div>
                <div class="col-md-4">
                <div class="row">
                  <div class="col-sm-4 col-md-5">
                    <div class="about-img">
                      <img src="img/san.jpg"  class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <div class="about-info">
                        <p><span class="title-s"><b>Name:</b></span><span class="ss">Sandeep </span></p>
                      <p><span class="title-s"><b>Profile:</b></span><span class="ss">BackendDeveloper</span></p>
                      <p><span class="title-s"><b>Email:</b></span><span class="ss">sandeepanagandula007 @gmail.com </span></p>
                      <p><span class="title-s"><b>Phone:</b></span><span class="ss">7095397191</span></p>
                    </div>
                  </div>
                    
                </div>
                </div>
                 <div class="col-md-4">
                <div class="row">
                  <div class="col-sm-4 col-md-5">
                    <div class="about-img">
                      <img src="img/vkrm.jpg" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <div class="about-info">
                      <p><span class="title-s"><b>Name:</b></span><span class="ss">Vikram</span></p>
                      <p><span class="title-s"><b>Profile:</b></span><span class="ss">BackendDeveloper</span></p>
                      <p><span class="title-s"><b>Email:</b></span><span class="ss">kandukurivikram2000 @gmail.com</span></p>
                      <p><span class="title-s"><b>Phone:</b></span><span class="ss">9154007430</span></p>
                    </div>
                  </div>
                    
                </div>
                </div>
              </div>
              
            </div>
          
          
          </div></div></div></section> 
 
-->
    
    
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
   <script>
   document.getElementById("Form").style.display = "none";
function openForm() {
   
 if( document.getElementById("Form").style.display == "block")
 {
	document.getElementById("Form").style.display = "none";
 }
 else
 {
	document.getElementById("Form").style.display = "block";
 }
}

</script>
    
    
</body>    
</html>



