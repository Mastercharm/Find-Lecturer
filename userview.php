<?php

	session_start();
		$con = new mysqli("localhost","id9852413_root","SVSsites1","id9852413_lecture");
		//	$con= new mysqli("localhost","root","","lecture");
		if($con->connect_error)
				die("Connection failed: " . $con->connect_error);
	$qu="SELECT * FROM lregister";
	$res = mysqli_query($con,$qu);
	//echo isset($_POST['sub']);
	
	if(isset($_POST['reserve']))
	{
		if(isset($_SESSION["name"]))
		{
			$_SESSION["num"] = $_POST['num'];
			
			header("Location:reserve.php");
			
		}
		else
		{
			header("Location:llogin.php");
		}
		
	}
	if(isset($_POST['log']))
		{
			
			session_destroy();
			header("Location:index.php");
		}
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

    <title>Userview</title>
    <link rel="stylesheet" href="css/userview.css">
    <!----------sai----------->
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/book.css">  

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
	<link rel="stylesheet" href="css/reserve.css">
	<link rel="stylesheet" href="css/logout.css">
</head>

<body>
    <section id="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h3>&nbsp;&nbsp;FIND LECTURER</h3>
            </a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="llogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userview.php">Lecturers</a>
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
    
    
   <!-----------------userview------------------>   
      <section id="about" class="about-mf sect-pt4 route">  
          <div class="col-md-12">   
    <div class="container">
        <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="post" action="userview.php">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search h4 text-body"></i>
                                    </div>&nbsp;&nbsp;
                                    <!--end of col-->
                                   
									 <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" name="se" placeholder="Find Your Lecturer">
                                    </div>&nbsp;&nbsp;
                                    <!--end of col-->
                                    <div class="col-auto1">
									
                                        <input type="submit" name="sub" class="btn" style="color:#fff;" value="Search">
                                    </div></div>
									
                                    
                                    <!--end of col-->
                                
                            </form>
                        </div>
                        <!--end of col-->
        </div>   
        
          </div></div>  
    <h2>OUR LECTURERS</h2>  
       
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><hr class="hr1">
          <div class="box-shadow-full">
                <div class="row">
			<?php
			
				$i=1;
			while($row = mysqli_fetch_assoc($res)) 
			{	
				?>
				<div class="col-md-4">  
                <div class="row">
                  <div class="col-sm-4 col-md-5">
                    <div class="about-img">
                      <img src="img/user/<?php if($row['IMG']) {echo $row['IMG']; }else { echo "logo.png";}?>" class="img-fluid " alt="">
                    </div>
                        </div> 
                  <div class="col-sm-6 col-md-8">
                    <div class="about-info">
                      <p><span class="title-s"><b>Name : </b></span><span class="ss"><?php echo $row['NAME']; ?></span></p>
                      <p><span class="title-s"><b>Category : </b></span> <span class="ss"><?php echo $row['CATE']; ?></span></p>
                        <p><span class="title-s"><b>Qualification : </b></span><span  class="ss"><?php echo $row['QUAL']; ?></span></p>
                      <p><span class="title-s"><b>Experience :</b></span><span class="ss"></span><?php echo $row['EXP']." years"; ?></p>
                      <p><span class="title-s"><b>Timings :</b></span><span class="ss"><?php echo $row['TIME']; ?></span></p>

					   <div class="promo-title3">
						<form method="post" action="userview.php">
						<input type="submit" name="reserve" value="Reserve" class="btn-find1"> 
						<input type="hidden" name="num" value="<?php echo $row['PHONE']; ?>">
						</form>
							<br/><br/>
						
					</div>
					</div>
				  </div>
                </div>
				</div>   
				<?php  } if(mysqli_num_rows($res)==0){	echo "No matches found"; }?>
				
				</div>
				
              </div>
              </div>
            </div>
    </div></section> 
    
    
     <!-------------------contact-------------------->
<div class="contact" id="contact"> 
<div class="container text-center">
    <h3>Contact us</h3><hr class="hr1"> 
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
	<script src="js/logout.js"></script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>




</body>

</html>
