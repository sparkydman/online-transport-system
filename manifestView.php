<?php 
session_start();

	$customer_surname = $_SESSION['customer_surname'];
	$customer_othername =	$_SESSION['customer_othername'];
	$customer_email =	$_SESSION['customer_email'];
	$customer_address =	$_SESSION['customer_address'];
	$customer_phone =	$_SESSION['customer_phone'];
	$customer_nextkinname =	$_SESSION['customer_nextkinname'];
	$customer_nextkinphone =	$_SESSION['customer_nextkinphone'];
	$customer_nextkinaddress = $_SESSION['customer_nextkinaddress'];
	$customer_destination =	$_SESSION['customer_destination'];
	$customer_bookseats =	$_SESSION['customer_bookseats'];
	$customer_bookbus =	$_SESSION['customer_bookbus'];
	$customer_bookprice =	$_SESSION['customer_bookprice'];
	$customer_bookdate =	$_SESSION['customer_bookdate'];
	$travelled = 	$_SESSION['customer_travelled_date'];
	$bus_id = $_SESSION['bus_id'];
	// $direction='';
	if(empty($travelled)){
		$travelled = 'Not Yet Travelled';
	}
	// if(isset($_SESSION['sidebar'])){
	// 	$direction = $_SESSION['sidebar'];
	// }
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<title>GIG VIEW MANIFEST PAGE</title>
			
			
	
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="manifest.css">
				
				<!-- Favicon -->
				<link rel="shortcut icon" href="assets/images/icon/favicon.png">
				
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">






<div class="container" style="height: 100%;">
	<div class="card" style="border: 2px solid grey;margin-bottom: 10%;margin-top: 5%; box-shadow: 0px 0px 10px 0px;" id="cardstyle">
		<div class="card-body">
			<h2 align="center" style="color: green;">THANK YOU FOR CHOOSING GOD IS GOOD MOTORS</h2>
			<h6 align="center" style="color: green;margin-top: 20px;">BOOKING DETAILS</h6>

		</div>
		
		
			<div class="form-control" role="form">
				
					<table class="table ">
						<thead>
							<th width="30%"></th>
							<th width="70%"></th>

						</thead>
						<tbody>
						<tr>
					<td ><label class="control-label">Surname:  </label></td> 
					<td><span class="form-control-fluid"><b>  <?php echo  $customer_surname; ?> </b></span></td></tr>
					<tr>
						<td><label class="control-label">Othername: </label></td>
						<td><span class="form-control-fluid"><b><?php echo $customer_othername; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Email: </label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_email; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Address:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_address; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Phone:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_phone; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Next of kin: </label></td>
						<td><span class="form-control-fluid"><b><?php echo $customer_nextkinname; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Next of Kin phone:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_nextkinphone; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Next of kin address:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_nextkinaddress; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Destination: </label></td>
						<td><span class="form-control-fluid"><b><?php echo $customer_destination; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">No of seats Booked:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_bookseats; ?> </b></span></td></tr>
					<tr>
						<td><label class="control-label">Bus Booked: </label></td>
						<td><span class="form-control-fluid"><b><?php echo $customer_bookbus; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Bus ID:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $bus_id; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label">Price Paid:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_bookprice; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label"> Booked Date:</label></td>
						<td> <span class="form-control-fluid"><b><?php echo $customer_bookdate; ?></b> </span></td></tr>
					<tr>
						<td><label class="control-label"> Travelled Date:</label></td> 
						<td><span class="form-control-fluid"><b><?php echo $travelled; ?></b> </span></td></tr>
					</tbody>
					</table>
			
				<!-- <center><button type="button" class="btn btn-success btn-lg" id="clickbk" align="center" style="margin: 10px auto;"><b>Exit</b></button></center> -->
				<center><button type="button" class="btn btn-success btn-lg" id="clickbk" align="center" style="margin: 10px auto;"><a href="index.php" style="text-decoration: none;color: white;"><b>Exit</b></a></button></center>
			</div>

		</div>
</div>
<!-- <input type="text" style="display: none;" id="direction" value='.<?php echo $direction ?>.'> -->





			
				   
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				
				<!-- <script type="text/javascript">
				
						$('#clickbk').click(function(){
							var chk = ('#direction').val();
							if(chk == ''){
								window.location.href='index.php';
							}else{
								window.location.href='sidebar.php';
							}
						});
				
				</script> -->


</body>
</html>