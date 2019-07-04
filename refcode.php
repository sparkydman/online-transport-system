<?php 
include 'database.php';
session_start();
if(isset($_POST['searchCode'])){
	$refcode = $_POST['booking_statue'];

	$qle = mysqli_query($conn, "SELECT * from customer where refcode = '$refcode' limit 1");
	if($qle->num_rows>0){
		$row = $qle->fetch_assoc();
		$_SESSION['customer_surname'] = $row['surname'];
		$_SESSION['customer_othername'] = $row['othername'];
		$_SESSION['customer_email'] = $row['email'];
		$_SESSION['customer_address'] = $row['address'];
		$_SESSION['customer_phone'] = $row['phone'];
		$_SESSION['customer_nextkinname'] = $row['nextkinname'];
		$_SESSION['customer_nextkinphone'] = $row['nextkinphone'];
		$_SESSION['customer_nextkinaddress'] = $row['nextkinaddress'];
		$_SESSION['customer_destination'] = $row['destination'];
		$_SESSION['customer_bookseats'] = $row['seats'];
		$_SESSION['customer_bookbus'] = $row['bus'];
		$_SESSION['customer_bookprice'] = $row['price'];
		$_SESSION['customer_bookdate'] = $row['date'];
		$_SESSION['customer_travelled_date'] = $row['travelled'];
		$_SESSION['bus_id'] = $row['bus_id'];
		header('location:manifestView.php');
		
	}else{
		echo "<script>alert('The Booking Code does not exit')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
if ($_POST['ref_code_btn']) {
	$refcode = $_POST['ref_code'];

	$qle = mysqli_query($conn, "SELECT * from customer where refcode = '$refcode' limit 1");
	if($qle->num_rows>0){
		$row = $qle->fetch_assoc();
		$_SESSION['customer_surname'] = $row['surname'];
		$_SESSION['customer_othername'] = $row['othername'];
		$_SESSION['customer_email'] = $row['email'];
		$_SESSION['customer_address'] = $row['address'];
		$_SESSION['customer_phone'] = $row['phone'];
		$_SESSION['customer_nextkinname'] = $row['nextkinname'];
		$_SESSION['customer_nextkinphone'] = $row['nextkinphone'];
		$_SESSION['customer_nextkinaddress'] = $row['nextkinaddress'];
		$_SESSION['customer_destination'] = $row['destination'];
		$_SESSION['customer_bookseats'] = $row['seats'];
		$_SESSION['customer_bookbus'] = $row['bus'];
		$_SESSION['customer_bookprice'] = $row['price'];
		$_SESSION['customer_bookdate'] = $row['date'];
		$_SESSION['customer_travelled_date'] = $row['travelled'];
		$_SESSION['bus_id'] = $row['bus_id'];
		// $_SESSION['sidebar'] = 'true';
		header('location:manifestAdmin.php');
		
	}else{
		echo "<script>alert('The Booking Code does not exit')</script>";
		echo "<script>window.open('sidebar.php','_self')</script>";
	}
}


 ?>