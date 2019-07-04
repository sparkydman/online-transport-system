
<!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<title>GIG THANKS PAGE</title>
			
			
	
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			
				<!-- Favicon -->
				<link rel="shortcut icon" href="assets/images/icon/favicon.png">
				
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">

<?php session_start(); 
$refcode = $_SESSION['refcode'];
?>




<div class="container" style="height: 100%;">
	<div class="card" style="margin-top:15%;border: 2px solid grey; box-shadow: 0px 0px 10px 0px;height: 400px;" id="cardstyle">
		<div class="card-body">
			<h2 align="center" style="color: green;">THANK YOU FOR CHOOSING GOD IS GOOD MOTORS</h2>
		</div>
		
		<div class="card" style="height: 50%;width: 70%;margin: 0 auto; margin-bottom: 20px;"><h3 align="center">YOUR BOOKING REFERENCE CODE: <br/><br/><?php echo $refcode; ?></h3></div>
	<button type="button" class="btn btn-success btn-lg" ><a href="index.php" style="text-decoration: none;color: white;display: block;"><b>Exit</b></a></button>
		</div>
</div>






			
				   
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				
				


</body>
</html>