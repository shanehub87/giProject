<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>AJ Series 7</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">




<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<div class="header-logo"><a href="index.html" class="topbar-aj"><img src="images/air_header_w_logo.png" class="img-responsive" alt="Jordan"></a></div>
		</div>


	</div>
</div>






<!-- Confirm Section -->

<section id="confirm" class="main">
     <div class="container">
          <div class="wow fadeInUp row">

               
				<?php 

					  if(!empty($_GET['message'])) {
					     $message = $_GET['message'];
					      echo '<p class="message"> '.$message.'</p>';
					        }





				?>


          </div>
     </div>



</section>



<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

              

			<div class="col-md-12">
				<ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-pinterest"></a></li>
      
                         
                    </ul>

                    <img src="images/niketick.png" class="wow fadeInUp img-responsive nike_air" alt="Nike">
               </div>
			
		</div>
	</div>
</footer>




<!-- SCRIPTS -->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>