<?php require ('database.php'); 
session_start();
if(isset($_SESSION['loggin'])){
	$user = $_SESSION['user_id'];
}


?>
<!DOCTYPE html>
<html lang = "en">
<head>
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<title>God Is Good Motors</title>
				<!--Main CSS-->
				<!-- Datepicker -->
			
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
<!-- <script>
     function getState(){
      alart("changed");
     }
    </script> -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
					<div class="wrapper">
												<!-- PRELOADER -->
						<div id="st-preloader">
							<div id="pre-status">
								<div class="preload-placeholder"></div>
							</div>
						</div>
						<!-- /PRELOADER -->
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
										<li class="nav-item"><a href="#header" class="nav-link smooth-scroll">Home</a>
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
											<!-- /HEADER -->

						<!-- SLIDER -->
						<section id="slider">
							<div id="home-carousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active carousel-item" style="background-image: url(assets/images/01.jpg)">
										<div class="carousel-caption container">
											<div class="row">
												<div class="col-md-7">
													<h2>GOD IS GOOD MOTORS</h2>
													<h3>We Give You The Most Comfortable Trip</h3>
													<p>It is our resposibility to carefully ensure your safety anywhere in Nigeria. Our Drivers are professionals</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item carousel-item" style="background-image: url(assets/images/02.jpg)">
										<div class="carousel-caption container">
											<div class="row">
												<div class="col-md-7">
													<h2>GOD IS GOOD MOTORS</h2>
													<h3>Your Home When Your Journey Begin</h3>
													<p>It is our resposibility to carefully ensure your safety anywhere in Nigeria. Our Drivers are professionals</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item carousel-item" style="background-image: url(assets/images/03.jpg)">
										<div class="carousel-caption container">
											<div class="row">
												<div class="col-md-7">
													<h2>GOD IS GOOD MOTORS</h2>
													<h3>Your Comfort is Our Prime</h3>
													<p>It is our resposibility to carefully ensure your safety anywhere in Nigeria. Our Drivers are professionals</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item carousel-item" style="background-image: url(assets/images/04.jpg)">
										<div class="carousel-caption container">
											<div class="row">
												<div class="col-md-7">
													<h2>GOD IS GOOD MOTORS </h2>
													<h2>God is Indeed Good in Our Journey</h2>
													<p>It is our resposibility to carefully ensure your safety anywhere in Nigeria. Our Drivers are professionals</p>
												</div>
											</div>
										</div>
									</div>
									<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
									<a
										class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i>
									</a>
								</div>
							</div>
							<!--/#home-carousel-->
						</section>
						<!-- /SLIDER -->

							 <!-- Tab links -->
    <div class = "container-fluid tabmain">
    <div class = "container-fluid maintab">
        <div class="tab">
        	<div class="row">
  <button class="active tablinks form-control col-md-4" onclick="openCity(event, 'bookingBus')" id = "defaultOpen"><h6 style="font-size: 20px;">SEARCH FOR BUS</h6></button>
  <button class="tablinks form-control col-md-4" onclick="openCity(event, 'rentBus')"><h6 style="font-size: 20px;">RENT A BUS</h6></button>
  <button class="tablinks form-control col-md-4" onclick="openCity(event, 'refSearch')"><h6 style="font-size: 20px;">BOOKING STATUS</h6></button>
</div>
</div>
<!-- Tab content -->
<div id="bookingBus" class="container tabcontent">
    
  <!--  
     <a href ="#" class = "btn btn-light btn-md active" role="tab"  id = "bookbtn onneway">One Way</a>
    <a href ="#" class = "btn btn-light btn-md" role="tab" id = "bookbtn">Round Trip</a> <br>
    <div id = "oneWay"> -->
  


 <form action="searchBus.php" class="form-group" name="contact-form"
				      method="post">
					<div class="row">
						

						<div class="col-md-6">
							
                            <label for ="text" style="color: white;">Travelling From:</label>
                           <select name="terminal"  class="form-control" onchange="getstate()" id="tamin" required="required">
                            	<option value="">----Select Terminal---</option>
								 
                            	 <?php

                           $result=mysqli_query($conn,"SELECT*FROM terminal");
						  while($row=$result->fetch_array()){?>
						   <option value="<?php echo $row['id'];?>"><?php echo $row['city'];?></option>
						  
						<?php } 
                           ?>  
                            </select>
							
						</div>
						<div class="col-md-6">
						 <label for ="text" style="color: white;">Travelling To:</label>
							<select name="destination" class="form-control" id="destination_list" >
								<option value=''>---Select Destination---</option>
								
							</select>
						</div>
							<div class="col-md-4" style="padding-bottom: 10px">
                             <label for ="date" class="control-label" style="color: white;">Departure Date:</label>
							<input type="text" name="date"  class="form-control form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly required="required">
						
						</div>
						<div class="col-md-2" style="padding-bottom: 10px;">
                             <label for ="text" style="color: white;">No of Seats:</label>
							<input type="text" name="seat" class="form-control" required="required">
						</div>
                        
 						<div class ="col-md-6" style="padding-bottom: 10px; padding-top: 20px;">   
 							<button type="submit" class="btn btn-default" id = "booknw" style="margin-top: 10px;" name="booknow" >Book Now</button></div>
             
                       
            </div>
          </form> 
        </div>

<div id="rentBus" class="container tabcontent">
  <form action="searchBus.php" class="form-group" name="contact-form"
				      method="post">
					<div class="row">
						<div class="col-md-6">
							

                            <label for ="text" style="color: white;">Travelling From:</label>
                           <select name="destination" class="form-control" onchange="getdestination()" id="tamin1" required="required">
                            	<option value="">----Select Terminal---</option>
								 <?php

                           $result=mysqli_query($conn,"SELECT*FROM terminal");
						  while($row=$result->fetch_array()){?>
						   <option value="<?php echo $row['id'];?>"><?php echo $row['city'];?></option>
						  
						<?php } ?>
                            </select>
							
						</div>
						<div class="col-md-6">
						 <label for ="text" style="color: white;">Travelling To:</label>
							<select name="destination1" id="destination_list1" class="form-control">
								<option value=''>---Select Destination---</option>
								
							</select>
						</div>
						<div class="col-md-4" style="padding-bottom: 10px">
                             <label for ="date" class="control-label" style="color: white;">Departure Date:</label>
							<input type="text" name="date"  class="form-control form_date1" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly required="required">
						
						</div>
 						<div class ="col-md-6" style="padding-bottom: 10px; padding-top: 20px;"> 

 							<button type="submit" class="btn btn-default" id = "booknw" style="margin-top: 10px;" name="booknow1" >Book Now</button></div>
             
                       
            </div>
          </form> 
</div>

<div id="refSearch" class="container tabcontent">
	<div class="card-body" style="height: 100px;">
 <form class="form-group" action="refcode.php" method="post">
 	<div class="row">
 		<div class="col-md-6">
 			<input type="text" name="booking_statue" class="form-control" placeholder="enter your booking code">
 		</div>
 		<div class ="col-md-6" >   
 							<button type="submit" class="btn btn-default" id = "booknw" name="searchCode" >Search</button></div>
 	</div>
 </form>
</div> 
</div>
    </div>
        </div>
        
</div>
 <?php 
if(isset($_SESSION['surname'])){

}


  ?>


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

<section class="section-padding" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Services</h2>
					<span class="st-border"></span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-bus"></i> Pick Up Services</h2>
				<p>GIGM pick up service is a stress free bus service for the smart traveller. GIGM pick up service serves the cities of Lagos, Benin, Asaba and Abuja and serves as easier access to your travel plans and vehicles. The policies and procedures outlined in this Service Guide will ensure that GIGM pick up service operates successfully for you. Make your trip stress free. Let our buses come to you at no extra cost while booking your bus on our mobile app and website...<a href="#" style="color: #67d8ef;">read more</a></p>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-bus"></i> GIG Delivery Services</h2>
				<p>The service promise fast and accurate fast delivery service. At GIG Logistics, they are committed to provide cost effective Logistic Solutions for every business. With their fast and efficient delivery system, you can be rest assured that your consignment is safe and will reach its destination wherever it is in the world on time, everytime...<a href="#" style="color: #67d8ef;">read more</a></p>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-bed"></i> Courier Services</h2>
				<p>GIG Group offers courier services via their subsidiary company called GIG Logistics. The office is located at 1 Wole Ariyo Street, Lekki Phase 1, Lagos. GIG Logistics offers shipment tracking services on their website. GIG Logistics provides domestic, corporate and international courier solutions.  They also offer e-commerce logistic services which support Business to Business (B2B), Business to Customer (B2C) and multiple channel retailer logistic solutions...<a href="#" style="color: #67d8ef;">read more</a></p>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-bus"></i> GIG Bus Charter</h2>
				<p>GIGM.com offers the  Jet Van Luxury Travels which is a joint venture between Oya.com.ng and the GIG group. The Jet Van is bulletproof with exotic interior and exterior finishing. Its seats may be adjusted to sitting and sleeping positions. The vehicle is also WIFI enabled and it can be chartered for a luxurious trip to any destination...<a href="#" style="color: #67d8ef;">read more</a></p>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-bus"></i> Online Bus Booking</h2>
				<p>To book your ticket online for God Is Good Motors, click here. You can also download the GIGM app on Play store for an easier experience. If you would rather book at the terminal, this option is readily available. However, booking online often saves the customer between 10 – 20% of the bus ticket fare...<a href="#" style="color: #67d8ef;">read more</a></p>
			</div>
			<div class="col-lg-4 col-md-6 st-service">
				<h2><i class="fa fa-weixin"></i> Customer Service</h2>
				<p>We are always available to assist you. Our Omni-Channel contact centre agents are available 24/7 to support you. You can call in or reach us on our social media platforms; twitter and facebook, as well...<a href="#" style="color: #67d8ef;">read more</a></br>

				Email: contact@gigm.com.</p>
			</div>
		</div>
	</div>
</section>

<!-- OUR WORKS -->
<section id="our-works" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Bus Terminals</h2>
					<span class="st-border"></span>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="portfolio-wrapper">

					<ul class="filter">
						
						<li><a class="active"  href="#" data-filter=".eastern"><i class="fa fa-bus"></i>  Eastern</a>
						</li>
						<li><a href="#" data-filter=".northern"><i class="fa fa-bus"></i> Northern</a>
						</li>
						<li><a href="#" data-filter=".sourthsourth"><i class="fa fa-bus"></i> Sourth-Sourth</a>
						</li>
						<li><a href="#" data-filter=".sourthwest"><i class="fa fa-bus"></i> Sourth-West</a>
						</li>
						<li><a href="#" data-filter=".middlebelt"><i class="fa fa-bus"></i> Middle Belt</a>
						</li>
					</ul>
					<!--/#portfolio-filter-->

					<div class="portfolio-items row">
						<div class="col-lg-4 col-md-6 work-grid eastern ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p1.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p1.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Enugu Terminal</h5>
									<p>7, Market Road,Opposite State Library,Holy Ghost Park,Ogui,Enugu State. 08150846935 enugu@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid sourthsourth ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p2.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p2.jpg"><i
									class="fa fa-ho,me"></i></a>
									<h5>Asaba Terminal</h5>
									<p>Asaba – Onisha Express way, by Head-Bridge. 08150846931 asaba@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid sourthsourth ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p3.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p3.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Port-Harcourt Terminal</h5>
									<p> 228 Aba Road By Bori Camp, Just after INEC Office, Port Harcout, River State. 08150846943 portharcourt@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid sourthsourth ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p4.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p4.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Warri Terminal</h5>
									<p>138, Effurun Sapele Road, By Airport Junction, Effurun, Delta State. 08150846949 warri@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid eastern ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p10.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p10.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Owerri Terminal</h5>
									<p>31, Relief Road Junction, Off, Egbu Road, Owerri, Imo State 08150846942 owerri@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid northern">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p8.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p8.jpg"><i
									class="fa fa-Home"></i></a>
									<h5>Kaduna Terminal</h5>
									<p>Lagos garage, Mando, Kaduna. 08150846953 kaduna@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid eastern ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p6.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p6.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Aba Terminal</h5>
									<p>No 5, Asa road, Former Old Nitel Building, Aba. 07031195208 aba@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid eastern ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p5.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p5.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Umuahia Terminal</h5>
									<p> New Central Park, Ohia, Enugu-Port Harcourt Express Way. Umuahia, Abia State. 08150846944 umuahia@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid middlebelt ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p2.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p2.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Mararaba Terminal</h5>
									<p> Abuja Keffi road, by Abacha road junction, via nyanya-mararaba. opp. Chrisgold plaza or Oando filling station. Abuja. 08150846941 maraba@gigm.com</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 work-grid middlebelt ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p10.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p10.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Kubwa Terminal</h5>
									<p>Block 43, Gado Nasko Way, Opposite 2/2 Court, Kubwa, Abuja. 08150846940 kubwa@gigm.com</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 work-grid sourthsourth ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p9.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p9.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Uyo Terminal</h5>
									<p>3, Monsignor Akpan Avenue, Itam Industrial Layout, Opposite Timber Market, Itam 08150846947 uyo@gigm.com</p>
								</div>
							</div>
						</div>
							
						<div class="col-lg-4 col-md-6 work-grid eastern ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p4.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p4.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Awka Terminal</h5>
									<p>Elite shopping complex, opposite Crunchies Fries, Enugu/Onitsha Expressway, Awka, Anambra State 08150846933 awka@gigm.com</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 work-grid sourthwest ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p2.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p2.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Auchi Terminal</h5>
									<p>Auchi-Okene express way, by old staff Quarters, Auchi Poly. 08150846932 auchi@gigm.com</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 work-grid sourthwest ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p11.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p11.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Benin-Head Terminal</h5>
									<p>202B Uselu Lagos Road, Near Ediaken Market, Benin City, Edo State 08150846945 uselu@gigm.com</p>
								</div>
							</div>
						</div>
						

						<div class="col-lg-4 col-md-6 work-grid sourthwest ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p5.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p5.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Iyana-Ipaja Terminal</h5>
									<p>164, Lagos-Abeokuta Express way, Beside Diamond Bank, Lagos. 08150846938 iyana-ipaja@gigm.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 work-grid sourthwest ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p7.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p7.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Jibowu Terminal</h5>
									<p>20 Ikorodu Express Road, Jibowu, Lagos. 08150846939 jibowu@gigm.com</p>
								</div>
							</div>
						</div>

						
						<div class="col-lg-4 col-md-6 work-grid sourthwest ">
							<div class="portfolio-content">
								<img class="img-fluid" src="assets/images/port/p12.jpg" alt="">
								<div class="portfolio-overlay"><a href="assets/images/port/p12.jpg"><i
									class="fa fa-home"></i></a>
									<h5>Yaba (Central Park) Terminal</h5>
									<p>Yaba Central Park, Opp. Psychiatric Hospital, Yaba, Lagos. 08150846950 yaba@gigm.com</p>
								</div>
							</div>
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ABOUT US -->
<section id="about-us">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="about-us text-center">
					<h2>About us</h2>
					<p>GIGM.com is a member of the GIG Group and is the most technologically driven road transport company in Nigeria.

				Headquartered in Benin-City Edo state, GIGM.com has earned the reputation of service excellence since incorporation in 1998. Over the years, we have metamorphosed from what we were to what we are occupying the position of a trail blazer in our industry.

				A landmark for GIGM.com was our change of name from God is Good Motors to GIGM.com and the commissioning of our Ultra-Modern Bus terminal at Jibowu Lagos state which is arguably the best bus terminal in West Africa.

				Our core focus is providing amazing travel experience for commuters end to end.

				GIGM.com operates in over 10 states in Nigeria cutting across five of the six geo political zones of the country.

				With our ever growing fleet, excellent service experience and our extensive route network, GIGM.com has become a household name known for providing cutting edge passenger transport solutions.</p>
									<a href="" class="btn btn-send mb-3">View More</a>
				</div>
			</div>
			<div class="col-md-6 our-office">
				<div id="office-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active carousel-item">
							<img src="assets/images/port/p4.jpg" alt="">
						</div>
						<div class="item carousel-item">
							<img src="assets/images/port/p2.jpg" alt="">
						</div>
						<div class="item carousel-item">
							<img src="assets/images/port/p3.jpg" alt="">
						</div>
						<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i
							class="fa fa-angle-left"></i></a>
						<a
							class="office-carousel-right" href="#office-carousel" data-slide="next"><i
							class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<!--/#office-carousel-->
			</div>
		</div>
	</div>
</section>
<!-- /ABOUT US -->

<!-- CONTACT -->
<section class="section-padding" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Contact us</h2>
					<span class="st-border"></span>
				</div>
			</div>
			<div class="col-md-4 contact-info">
				<p class="contact-content">We are always available to assist you. Our Omni-Channel contact centre agents are available 24/7 to support you. You can call in or reach us on our social media platforms; twitter and facebook, as well.</p>
				
				<p class="st-phone"><i class="fa fa-mobile"></i> <strong>+2348139851110</strong>
				</p>
				<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>contact@gigm.com</strong>
				</p>
				<p class="st-website"><i class="fa fa-globe"></i> <strong>www.gigm.com</strong>
				</p>
			</div>
			<div class="col-md-7 offset-sm-">
				<form action="report.php" class="contact-form" name="contact-form"
				      method="post">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="name" required="required" placeholder="Name*">
						</div>
						<div class="col-md-6">
							<input type="email" name="email" required="required" placeholder="Email*">
						</div>
						<div class="col-md-8">
							<input type="text" name="subject" placeholder="Subject">
						</div>
						
						<div class="col-md-12">
							<textarea name="message" required="required" cols="30" rows="7"
							          placeholder="Message*"></textarea>
							<input type="submit" name="sendReport" class="btn btn-send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<input type="text" id="check" style="display:none;">
<!-- /CONTACT -->

<footer id="footer">
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
	$('#btn_login').click(function(){
		var username = $('#username').val();
		var password = $('#loginpassword').val();
		var checklogin = $('#check').val();
		
			$.ajax({
				dataType: "text",
					url:"chech.php",
					type:"POST",
					data:{username:username,password:password},
					success: function(data){
						$('#check').html(data);
					
					}
				});
			if(checklogin == 'YES'){
				('#general_navbar').hide();
				('#user_navbar').show();
			}else{
				window.open('index.php','_self');
			}
		
	});
</script>
<script type="text/javascript">
	


</script>

<script type="text/javascript">
	$('#btn_register').click(function(){
		var surname = $('#surname').val();
		var othername = $('#othername').val();
		var customeremail = $('#customeremail').val();
		var customerphone = $('#customerphone').val();
		var customeraddress = $('#customeraddress').val();
		var password = $('#password').val();
		var confirmpassword = $('#confirmpassword').val();
 
		
				$.ajax({
					dataType: "text",
					url:"register.php",
					type:"POST",
					data:{surname:surname,othername:othername,customeremail:customeremail,customerphone:customerphone,customeraddress:customeraddress,password:password, confirmpassword:confirmpassword},
					success:function(data){
						$('#invis').html(data);
						
						

					}

				});
			

	});


</script>


<script type="text/javascript">
	function getstate()
{
	var value=$("#tamin")[0].selectedIndex;
	// alert(value);
$.ajax({
 url:"get_states.php",
 type:"POST",
 data:{id:value},
 success: function(data){
  $("#destination_list").html(data);
 
 }
});
return false;
}
</script>
<script type="text/javascript">
	function getdestination()
{
	var value=$("#tamin1")[0].selectedIndex;
$.ajax({
 url:"get_states.php",
 type:"POST",
 data:{id:value},
 success: function(data){
  $("#destination_list1").html(data);
 
 }
});
return false;
}
</script>


						<!-- JS -->

									<!-- Script -->
							
				
				<script type = "text/javascript" src = "assets/js/tab.js"></script>
				   
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				<script src="assets/js/popper.min.js"></script><!-- popper -->
				<script src="assets/js/bootstrap.min.js"></script><!-- Bootstrap -->
				<script src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script><!-- Bootstrap -->
				<script src="assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
				<script src="assets/js/jquery.parallax.js"></script><!-- Parallax -->
				<script src="assets/js/jquery.easing.min.js"></script><!-- Easing animation -->
				<script src="assets/js/jquery.fitvids.js"></script><!-- fitvids -->
				<script src="assets/js/jquery.counterup.min.js"></script><!-- CounterUp -->
				<script src="assets/js/waypoints.min.js"></script><!-- waypoints -->
				<script src="assets/js/jquery.isotope.min.js"></script><!-- isotope -->
				<script src="assets/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->

				<script src="assets/js/scripts.js"></script><!-- Scripts -->
				
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
					
<script type="text/javascript">
   
$('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });

$('.form_date1').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });

</script>
<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 60000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
</script>
</body>
</html>