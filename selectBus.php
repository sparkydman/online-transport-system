<?php 
require 'database.php';
session_start();
if(isset($_SESSION['loggin'])){
	$user = $_SESSION['user_id'];
}
$departure = $_SESSION['departure'];
$hiace_price =$_SESSION['hiace_price'];
$sienna_price =$_SESSION['sienna_price'];
$sprinter_price=$_SESSION['sprinter_price'];
$seater = $_SESSION['seater'];
$destination = $_SESSION['destination'];
$terminal = $_SESSION['terminal'];
$hiace_price_total = $seater * $hiace_price; 
$sienna_price_total = $seater * $sienna_price; 
$sprinter_price_total = $seater * $sprinter_price; 
$hiace_loading =(int)$_SESSION['hiace_loading'];
$sienna_loading =(int)$_SESSION['sienna_loading'];
$sprinter_loading =(int)$_SESSION['sprinter_loading'];
$hiace_seat = 12 - $hiace_loading;
$sienna_seat = 8 - $sienna_loading;
$sprinter_seat = 8 - $sprinter_loading;
$_SESSION['incomesienna'] = $sienna_price_total;
$_SESSION['incomesprinter'] = $sprinter_price_total;
$_SESSION['incomehiace'] = $hiace_price_total;
$totalPrice = 0;
$hiace_alert = '';
$sienna_alert = '';
$sprinter_alert ='';
if($hiace_loading == 0){
	$hiace_alert ='Hiace is not Loading';
}else{
	$hiace_alert ='Hiace is Loading';
}
if($sienna_loading==0){
	$sienna_alert ='Sienna is not loading';
}else{
	$sienna_alert ='Sienna is loading';
}
if($sprinter_loading==0){
	$sprinter_alert ='Sprinter is not loading';
}else{
	$sprinter_alert ='Sprinter is loading';

}
	//echo "<script>alert('$sienna_loading')</script>";
	// if (isset($_POST['bookSienna'])) {
	// 	$_SESSION['busnow'] = "Sienna";
	// 	$_SESSION['sienna_loading'] = $seater;
	// 	$_SESSION['income'] = $sienna_price_total;
	// 	header('location:manifest.php');
	// }
	// if (isset($_POST['bookSprinter'])) {
	// 	$_SESSION['busnow'] = "Sprinter";
	// 	$_SESSION['sprinter_loading'] = $seater;
	// 	$_SESSION['income'] = $sprinter_price_total;
	// 	header('location:manifest.php');
	// }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<title>GIG Select Bus</title>
			
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
				<link rel="stylesheet" href="assets/css/magnific-popup.css">
				<link rel="stylesheet" href="assets/css/font-awesome.css">
				<link rel="stylesheet" href="mystyle.css">
				<link rel="stylesheet" href="otherStyle.css">
				<link rel="stylesheet" href="assets/css/responsive.css">
				<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css"  media="screen">
				<!-- Favicon -->
				<link rel="shortcut icon" href="assets/images/icon/favicon.png">
				
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">
					<div class="wrapper">
												<!-- PRELOADER -->
						<div id="st-preloader">
							<div id="pre-status">
								<div class="preload-placeholder"></div>
							</div>
						</div>
<!-- HEADER -->
					<header id="header">
						<nav class="navbar  st-navbar fixed-top navbar-expand-md" >
							<div class="container">
								<h1 class="logo" ><a href="index.php"><img src="assets/images/logo_1.png" alt="logo"></a></h1>
								<button type="button" class="navbar-toggler  navbar-toggler-right" data-toggle="collapse"
								        data-target="#st-navbar-collapse"><span class="sr-only">Toggle navigation</span>
									&#x2630;
								</button>
							

								<div class="collapse navbar-collapse justify-content-end"
								     id="st-navbar-collapse">
									<ul class="nav navbar-nav ml-auto ">
										<li class="nav-item"><a href="index.php" class="nav-link smooth-scroll">Home</a>
										</li>
										<li class="nav-item"><a href="#services" class="nav-link smooth-scroll">Services</a>
										</li>
										<li class="nav-item"><a href="#our-works" class="nav-link smooth-scroll">Bus Terminals</a>
										</li>
										<li class="nav-item"><a href="#about-us" class="nav-link smooth-scroll">About Us</a>
										</li>
										<li class="nav-item"><a href="#contact" class="nav-link smooth-scroll">Contact</a>
										</li>
									<?php 
if(isset($_SESSION['loggin'])){
	?>
	<li class="nav-item"><a href="logout.php"><button type="button" class="btn btn-light" id="btn_logout" >
  										Logout</button></a> </li>
  									    <?php
}else{
	?>
		<li class="nav-item"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginmodal" id="btn_login1"> Login</button>  </li>
										<li class="nav-item"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#registermodal" id="btn_register1">
  										Register</button> 
  									    </li>
  									    <?php
}
			 ?>

									</ul>
								</div>
								<!-- /.navbar-collapse -->
							</div>
													<!-- /.container -->
												</nav>
											</header>
											<div class="container"  id="big">

			<div class="container" id="buscontainer" >
				<div class="card ">
						<form class="form-group" method="post" action="">
							<div class="row">
						<div class="col-lg-3 col-md-4 work-grid ">
						
								<img class="img-fluid" src="assets/images/bus/b1.jpg" height="100" width="200" alt="" style="margin-top: 10px;">
							
							<strong><span class="form-control" >Toyota Hiace Bus</span></strong>
						</div>
						<div class="col-lg-5 col-md-4 work-grid" >
							<label class="control-label">Route:</label>
							<strong><span class="form-control" ><?php echo $destination; ?></span></strong>
						</div>
						<div class="col-lg-2 col-md-4 work-grid" >
							<label class="control-label">Available Seat:</label>
							<strong><span class="form-control" ><?php echo $hiace_seat; ?></span></strong>
							<!-- <strong><span class="form-control" style="color: green;" ><b><i><?php echo $hiace_alert; ?></i></b></span></strong> -->
						</div>
						<div class="col-lg-2 col-md-4 work-grid ">
							<!-- <label class="control-label">Route:</label> -->
							<strong><span class="form-control"><?php echo "NGN: ".$hiace_price_total; ?></span></strong>
							<strong><span class="form-control 	airline_seat_recline_normal"  ><?php echo $seater."  "; ?>&#xe637; Seaters</span></strong>

							<input type="button" name="bookHiace" class="form-control"  value="Book Now" id="bookHiace" data-toggle="modal" data-target="#loginmodal1">
						</div>
					</div>
					</form>
				</div>
				<div class="card ">
						<form class="form-group" method="post" action="">
							<div class="row">
						<div class="col-lg-3 col-md-4 work-grid ">
						
								<img class="img-fluid" src="assets/images/bus/b2.jpg" height="100" width="200" alt="" style="margin-top: 10px;">
							
							<strong><span class="form-control" >Toyota Sienna Mini Bus</span></strong>
						</div>
						<div class="col-lg-5 col-md-4 work-grid " >
							<label class="control-label">Route:</label>
							<strong><span class="form-control"  ><?php echo $destination; ?></span></strong>
						</div>
						<div class="col-lg-2 col-md-4 work-grid" >
							<label class="control-label">Available Seat:</label>
							<strong><span class="form-control" ><?php echo $sienna_seat; ?></span></strong>
						</div>
						<!-- <strong><span class="form-control" style="color: green;" ><b><i><?php echo $sienna_alert; ?></i></b></span></strong> -->
						<div class="col-lg-2 col-md-4 work-grid " >
							<!-- <label class="control-label">Route:</label> -->
							<strong><span class="form-control"  ><?php echo "NGN: ".$sienna_price_total; ?></span></strong>
							<strong><span class="form-control 	airline_seat_recline_normal" ><?php echo $seater."  "; ?>&#xe637; Seaters</span></strong>

							<input type="button" name="bookSienna" class="form-control"  value="Book Now" id="bookSienna" data-toggle="modal" data-target="#loginmodal2">
						</div>
						</div>
					</form>
				</div>
				<div class="card ">
						<form class="form-group" method="post" action="">
							<div class="row">
						<div class="col-lg-3 col-md-4 work-grid ">
						
								<img class="img-fluid" src="assets/images/bus/b3.jpg" height="100" width="200" alt="" style="margin-top: 10px;">
							<strong><span class="form-control" >Mercedes Sprinter Bus</span></strong>
						</div>
						<div class="col-lg-5 col-md-4 work-grid " >
							<label class="control-label">Route:</label>
							<strong><span class="form-control" ><?php echo $destination; ?></span></strong>
						</div>
						<div class="col-lg-2 col-md-4 work-grid" >
							<label class="control-label">Available Seat:</label>
							<strong><span class="form-control" ><?php echo $sprinter_seat; ?></span></strong>
						</div>
						<!-- <strong><span class="form-control" style="color: green;" ><b><i><?php echo $sprinter_alert; ?></i></b></span></strong> -->
						<div class="col-lg-2 col-md-4 work-grid ">
							<!-- <label class="control-label">Route:</label> -->
							<strong><span class="form-control" ><?php echo "NGN: ".$sprinter_price_total; ?></span></strong>
							<strong><span class="form-control 	airline_seat_recline_normal" ><?php echo $seater."  "; ?>&#xe637; Seaters</span></strong>

							<input type="button" name="bookSprinter" class="form-control"  value="Book Now" id="bookSprinter" data-toggle="modal" data-target="#loginmodal3">
						</div>
						</div>
					</form>
				</div>
			</div>
</div>
</div>

<div class="modal fade" id="loginmodal1" tabindex="-1" role="dialog" aria-labelledby="modalabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalstyler" style=" background-color: rgba(255,85,85,0.7); box-shadow: 0px 0px 10px 0px;color: whitesmoke;">
      <div class="modal-header">
        <h5 class="modal-title" id="modalabel">Payment Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-group" method="post" action="manifest.php">
      <div class="modal-body">
      	
        <div class="card"  id="modal_card">
        	<article>
        		<h6>Route: <?php echo $destination; ?></h6><br>
        		<h6>Seaters: <?php echo $seater; ?></h6><br>
        		<h6>Total Price: <?php echo $hiace_price_total; ?>  </h6><br/>
        	</article>
        	<?php 
        	if (!isset( $_SESSION['user_id'])) {
        		?>
        		<div>
        		<p>Please Consider SignIn/SignUp so that your booking details will be saved for you.</p>
        	</div>
        	<?php

        	}
        	 ?>
        	
        </div>
			
      </div>
      <div class="modal-footer">
        <div><button type="submit" class="btn btn-success" name="hiace_btn" id="hiace_btn">PAY NOW</button></div><br/>
        	
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="loginmodal2" tabindex="-1" role="dialog" aria-labelledby="modalabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalstyler" style=" background-color: rgba(255,85,85,0.7); box-shadow: 0px 0px 10px 0px;color: whitesmoke;">
      <div class="modal-header">
        <h5 class="modal-title" id="modalabel">Payment Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-group" method="post" action="manifest.php">
      <div class="modal-body">
      	
        <div class="card" id="modal_card">
        	<article>
        		<h6>Route: <?php echo $destination; ?></h6><br>
        		<h6>Seaters: <?php echo $seater; ?></h6><br>
        		<h6>Total Price: <?php echo $sienna_price_total; ?>  </h6><br/>
        	</article>
        	<?php 
        	if (!isset( $_SESSION['user_id'])) {
        		?>
        		<div>
        		<p>Please Consider SignIn/SignUp so that your booking details will be saved for you.</p>
        	</div>
        	<?php

        	}
        	 ?>
        </div>
				
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="sienna_btn" id="sienna_btn">PAY NOW</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="loginmodal3" tabindex="-1" role="dialog" aria-labelledby="modalabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalstyler" style=" background-color: rgba(255,85,85,0.7); box-shadow: 0px 0px 10px 0px;color: whitesmoke;">
      <div class="modal-header">
        <h5 class="modal-title" id="modalabel">Payment Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-group" method="post" action="manifest.php">
      <div class="modal-body">
      	
        <div class="card" id="modal_card">
        	<article>
        		<h6>Route: <?php echo $destination; ?></h6><br>
        		<h6>Seaters: <?php echo $seater; ?></h6><br>
        		<h6>Total Price: <?php echo $sprinter_price_total; ?>  </h6><br/>
        	</article>
        	<?php 
        	if (!isset( $_SESSION['user_id'])) {
        		?>
        		<div>
        		<p>Please Consider SignIn/SignUp so that your booking details will be saved for you.</p>
        	</div>
        	<?php

        	}
        	 ?>
        </div>
				
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="sprinter_btn" id="sprinter_btn">PAY NOW</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="modalabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalstyle" style=" background-color: rgba(255,85,85,0.7); box-shadow: 0px 0px 10px 0px;color: whitesmoke;">
      <div class="modal-header">
        <h5 class="modal-title" id="modalabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-group" method="post" action="register.php">
      <div class="modal-body">
      	
        <label>Email:</label>
				<input class="form-control" type="email" name="username" placeholder="enter your email" id="username" required> <br/>
				<label>Password:</label>
				<input class="form-control" type="password" name="loginpassword" placeholder="enter passward" id="loginpassword" required>
				
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="btn_login" id="btn_login">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalstyle" style=" background-color: rgba(255,85,85,0.7);
    box-shadow: 0px 0px 10px 0px;
    color: whitesmoke;">
      <div class="modal-header">
        <h5 class="modal-title" id="registermodalabel">Register</h5>
        <span id="errorspan"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <form class="form-group" method="post" action="register.php">
      <div class="modal-body">
      	
        <label>surname:</label>
				<input class="form-control" type="text" name="surname" placeholder="enter your surname" id="surname"> <br/>
				<label>Othername:</label>
				<input class="form-control" type="text" name="othername" placeholder="enter othername" id="othername" required><br/>
				<label>Email:</label>
				<input class="form-control" type="email" name="customeremail" placeholder="enter email" id="customeremail" required><br/>
				<label>Phone Number:</label>
				<input class="form-control" type="text" name="customerphone" placeholder="enter phone number" id="customerphone" maxlength="11" required><br/>
				<label>Address:</label>
				<input class="form-control" type="text" name="customeraddress" placeholder="enter address" id="customeraddress" required><br/>
				<label>Password:</label>
				<input class="form-control" type="password" name="password" placeholder="enter password" id="password" maxlength="11" required><br/>
				<label>Confirm Password:</label>
				<input class="form-control" type="password" name="confirmpassword" placeholder="please confirm password" id="confirmpassword" required><br/>
				
     
  </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="btn_register" id="btn_register">Register</button>
      </div>
  </form>
    </div>
  </div>
</div>

<footer id="footer" >
  <div class="container">
    <div class="row">
      <!-- SOCIAL ICONS -->
      <div class="col-md-6 order-sm-2 footer-social-icons"><span>Follow us:</span>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a
          href=""><i class="fa fa-twitter"></i>
        </a> <a href=""><i class="fa fa-google-plus"></i></a>
        <a href=""><i class="fa fa-pinterest-p"></i></a>
      </div>
      <!-- /SOCIAL ICONS -->
      <div class="col-md-6 order-sm-1 copyright">
        <p>&#xA9; 2018 <a href="#">GIGM</a>. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- /FOOTER -->
<!-- Scroll-up -->
<div class="scroll-up">
  <ul>
    <li><a class="smooth-scroll" href="#header"><i class="fa fa-angle-up"></i></a>
    </li>
  </ul>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#bookHiace').click(function(){
			
		});
		$('#hiace_btn').click(function(){


			$('#big').hide();
			$('#loginmodal1').modal('hide');

			$('#manifest').show();
		});
		$('#sienna_btn').click(function(){
			$('#big').hide();
			$('#loginmodal2').modal('hide');

			$('#manifest').show();
		});
		$('#sprinter_btn').click(function(){
			$('#big').hide();
			$('#loginmodal3').modal('hide');
			$('#manifest').show();
		});

	});


</script>



 <script type = "text/javascript" src = "assets/js/tab.js"></script>
				   
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				<script src="assets/js/popper.min.js"></script><!-- popper -->
				<script src="assets/js/bootstrap.min.js"></script><!-- Bootstrap -->
				<script src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script><!-- Bootstrap -->
				<script src="assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script><!-- Bootstrap -->
				<script src="assets/js/jquery.parallax.js"></script><!-- Parallax -->
				<script src="assets/js/jquery.easing.min.js"></script><!-- Easing animation -->
				<script src="assets/js/jquery.fitvids.js"></script><!-- fitvids -->
				<script src="assets/js/jquery.counterup.min.js"></script><!-- CounterUp -->
				<script src="assets/js/waypoints.min.js"></script><!-- waypoints -->
				<script src="assets/js/jquery.isotope.min.js"></script><!-- isotope -->
				<script src="assets/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->

				<script src="assets/js/scripts.js"></script><!-- Scripts -->
 </body>
 </html>