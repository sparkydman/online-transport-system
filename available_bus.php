<?php 
require 'database.php';
session_start();
if (isset($_POST['avaible_bus'])) {
	$motorid = $conn->escape_string($_POST['bus_available']);
	$car_trip = $conn->escape_string($_POST['bus_trip']);
	$departure = $conn->escape_string($_POST['date']);
	$qle = "SELECT * from driver_info where car_id = '$motorid'";
	$result = mysqli_query($conn,$qle);
	if ($result->num_rows>0) {

		while($row = $result->fetch_assoc()){ 
			$driver =$row['driver_id'];
			$cardi = $row['car_id'];
			$car_model = $row['car_model'];
			$car_route =$row['route'];
			$car_seat = $row['seaters'];
}
	
	
	// echo $car_route;
}
	$query = "INSERT into available(motoid,driverid,bus,trip,route,departure) values('$cardi','$driver','$car_model','$car_trip','$car_route','$departure')";
 $res = mysqli_query($conn,$query);
	if ($res) {
		// echo $car_route;
		$_SESSION['driverid'] = $driver;
	$_SESSION['cardi'] = $cardi;
	$_SESSION['car_model'] = $car_model;
	$_SESSION['car_route'] = $car_route;
	$_SESSION['car_seat'] = $car_seat;
	$_SESSION['departure'] = $departure;
		header("location:sidebar.php");
		//echo "<script> window.open('sidebar.php','_self')</script>";
		}
	
}

 ?>