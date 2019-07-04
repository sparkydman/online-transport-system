<?php 
require 'database.php';
	session_start();
	if(isset($_SESSION['loggin'])){
	$user = $_SESSION['user_id'];
}
	if (isset($_POST['booknow'])) {
		$terminal = $conn->escape_string($_POST['terminal']);
		$destination = $conn->escape_string($_POST['destination']);
		$departure = $conn->escape_string($_POST['date']);
		$seater = $conn->escape_string($_POST['seat']);
		 $_SESSION['seater']=$seater;
		 $_SESSION['terminal']=$terminal;
		 $_SESSION['departure']=$departure;

		$route = "SELECT * from destination where id = '$destination' ";
		$result = mysqli_query($conn,$route);

		while($details = mysqli_fetch_assoc($result)){
		$_SESSION['hiace_price']= $details['hiace'];
		$_SESSION['sienna_price']= $details['sienna'];
		$_SESSION['sprinter_price']= $details['sprinter'];
		 $_SESSION['destination']=$details['route'];
		 $_SESSION['hiace_loading']=$details['hiace_loading'];
		 $_SESSION['sienna_loading']=$details['sienna_loading'];
		    $_SESSION['sprinter_loading']=$details['sprinter_loading'];

		}
		
		header('location:selectBus.php');
	}
	if (isset($_POST['booknow1'])) {
		$terminal = $conn->escape_string($_POST['terminal']);
		$destination = $conn->escape_string($_POST['destination']);
		$departure = $conn->escape_string($_POST['date']);
		 $_SESSION['terminal']=$terminal;
		 $_SESSION['departure']=$departure;
	
		$route = "SELECT * from destination where id = '$destination' ";
		$result = mysqli_query($conn,$route);

		while($details = mysqli_fetch_assoc($result)){
		$_SESSION['hiace_price']= $details['hiace'];
		$_SESSION['sienna_price']= $details['sienna'];
		$_SESSION['sprinter_price']= $details['sprinter'];
		 $_SESSION['destination']=$details['route'];
		  $_SESSION['hiace_loading']=$details['hiace_loading'];
		   $_SESSION['sienna_loading']=$details['sienna_loading'];
		    $_SESSION['sprinter_loading']=$details['sprinter_loading'];}
		header('location:selectBus.php');
	}


 ?>