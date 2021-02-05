<?php


session_start();
	$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
//	$con= new mysqli("localhost","root","","lecture");
	if($con->connect_error)
		die("Connection failed: " . $con->connect_error);
	$name = $_SESSION["name"];	
	
	$qu="SELECT * FROM lregister WHERE PHONE='$name'";
		if($res = mysqli_query($con,$qu))
		{
			 if($row = $res->fetch_assoc()) 
			 {
				$na = $row['NAME'];
				$em = $row['EMAIL'];
				$ph = $row['PHONE'];
				$ca = $row['CATE'];
				$ex = $row['EXP'];
				$lo = $row['LOC'];
				$qu = $row['QUAL'];
				$ti = $row['TIME'];
				$im = $row['IMG'];
			 }
			
		}		
		if(isset($_POST['log']))
		{
			
			session_destroy();
			header("Location:index.php");
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
  
<title>Profile</title>
<link rel="stylesheet" href="css/profile.css">   
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
  <link rel="stylesheet" href="css/logout.css">   
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
	    
        
        <li class="nav-item">
        <div class="dropdown">    
			<input type="image" class="dropbtn" onclick="myFunction()" src="img/user/<?php echo $_SESSION['im']; ?>" height="30px" width="30px"/><br/>
			<div id="myDropdown" class="dropdown-content">
			<form action="profile.php"method="post">
				<input type="submit" value="Logout" class="b" name="log">
			</form>
			</div>
		</div>            
        </li> 
			<li class="nav-item">
        <label class="lab"><?php echo $_SESSION["na"];  ?></label> 
        </li> 
    </ul>
  </div>
</nav> 
</section>
    
<!-------------------profile--------------->
    
    <section id="profile">
        <div class="container">
        <div class="row">
       <div class="col-md-12">
          <br/> <br/><div class="card">
         <a href="editprofile.php"><h1 id="h" align="right">                
               <img  height="20" width="20" src="img/pencil.png" align="right"/>  </h1></a>
 <br/><center><img class="img3" src="img/user/<?php echo $im; ?>" id="img1"></center>     
               
  <h1 id="name"><?php echo $na; ?></h1>
           <table class="tab" align="center">
           <tr>
            <td class="tab1"><b>Email: </b><label id="i1"><?php echo $em; ?></label></td>
             <td class="tab2" ><b>Phone no:</b> <label id="i2"><?php echo $ph; ?></label></td>  
               
               </tr>
               <tr>
              <td class="tab2"><b>Category:</b><label id="i3"><?php echo $ca; ?></label></td>  
               <td class="tab1"><b>Experience: </b><label id="i4"><?php echo $ex; ?></label></td>  
               
               </tr>
               <tr>
			    <td class="tab1"><b>Location:</b><label><?php echo $lo; ?></label></td>  
               <td class="tab2"><b>Qualification: </b><label><?php echo $qu; ?></label></td>  
               
               </tr>
                <tr>
              <td class="tab3"><b>Timings:</b><label id="i5"><?php echo $ti; ?></label></td>  
               </tr>
			  
			   
           </table>
           
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
    <script src="js/register.js"></script>
	<script src="js/logout.js"></script>

<!--------------smooth scroll---------------->
        <script src="smooth-scroll.js"></script>
        <script>
	            var scroll = new SmoothScroll('a[href*="#"]');
          </script>
<script src="suc.css"></script>   
    
    
</body>    
</html>



