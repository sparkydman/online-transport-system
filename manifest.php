<?php 
require 'database.php';
session_start();
$departure = $_SESSION['departure'];
	
	if (isset($_POST['hiace_btn'])) {
		$destination = $_SESSION['destination'];
	$seater = $_SESSION['seater'];
	$_SESSION['bus']='Hiace';

	$income =$_SESSION['incomehiace'];
	
	$st = 1;
			$qle = mysqli_query($conn,"SELECT * from available where bus = 'Hiace' and route ='$destination' and departure = '$departure' order by arrival asc");
			if($qle->num_rows == $st){
				while($row = $qle->fetch_assoc()){
				$boarded = $row['passenger'];
				$bus_id = $row['motoid'];}
				
				if($boarded <= 12 && ($boarded + $seater) <= 12){
				$query = mysqli_query($conn,"UPDATE available set status = 1, passenger= passenger + '$seater', income = income + '$income' where bus = 'Hiace' and route ='$destination'");
				$query1 = mysqli_query($conn,"UPDATE destination set hiace_loading = hiace_loading + '$seater' where route ='$destination' ");
				$_SESSION['bus_id'] = $bus_id;
				header('location:manifestForm.php');

				}else{
					echo "<script>alert('This bus is full we will provide bus shortly')</script>";
				echo "<script>window.open('index.php','_self')</script>";
				
				//$query1 = mysqli_query($conn,"UPDATE destination set sienna_loading = 0 where route ='$destination' ");
				$st = $st+1;
				}
				
			}
			else{
				echo "<script>alert('Hiace is not loading to your destination now. Please choose other bus')</script>";
				echo "<script>window.open('selectBus.php','_self')</script>";
	 // echo("Error description: " . mysqli_error($conn));
			
}
mysqli_close($conn);
}

if (isset($_POST['sienna_btn'])) {
		
	$destination = $_SESSION['destination'];
	$seater = $_SESSION['seater'];
	$_SESSION['bus']='Sienna';
	$income =$_SESSION['incomesienna'];

	$st = 1;
			$qle = mysqli_query($conn,"SELECT * from available where bus = 'Sienna' and route ='$destination' and departure = '$departure' order by arrival asc");
			

			if($qle->num_rows == $st){
				while($row = $qle->fetch_assoc()){
				$boarded = $row['passenger'];
				$bus_id = $row['motoid'];}
				
				if($boarded <= 8 && ($boarded + $seater) <= 8){
				$query = mysqli_query($conn,"UPDATE available set status = 1, passenger= passenger + '$seater', income = income + '$income' where bus = 'Sienna' and route ='$destination'");
				$query1 = mysqli_query($conn,"UPDATE destination set sienna_loading = sienna_loading + '$seater' where route ='$destination'");
				$_SESSION['bus_id'] = $bus_id;
				header('location:manifestForm.php');

				}else{
					echo "<script>alert('This bus is full we will provide bus shortly')</script>";
				echo "<script>window.open('index.php','_self')</script>";

					//$query1 = mysqli_query($conn,"UPDATE destination set sienna_loading = 0 where route ='$destination' ");
					$st = $st+1;
				}
				
				
			}


			else{
				echo "<script>alert('Sienna is not loading to your destination now. Please choose other bus')</script>";
				echo "<script>window.open('selectBus.php','_self')</script>";

	 // echo("Error description: " . mysqli_error($conn));
			
}
mysqli_close($conn);
}

if (isset($_POST['sprinter_btn'])) {
	
	$destination = $_SESSION['destination'];
	$seater = $_SESSION['seater'];
	$income =$_SESSION['incomesprinter'];
	$_SESSION['bus']='Sprinter';
		
	$st = 1;
			$qle = mysqli_query($conn,"SELECT * from available where bus = 'Sprinter' and route ='$destination' and departure = '$departure' order by arrival asc");
			if($qle->num_rows == $st){
				while($row = $qle->fetch_assoc()){
				$boarded = $row['passenger'];
				$bus_id = $row['motoid'];}
				if($boarded <= 8 && ($boarded + $seater) <= 8){
				$query = mysqli_query($conn,"UPDATE available set status = 1, passenger= passenger + '$seater', income = income + '$income' where bus = 'Sprinter' and route ='$destination'");
				$query1 = mysqli_query($conn,"UPDATE destination set sprinter_loading = sprinter_loading + '$seater' where route ='$destination'");
				$_SESSION['bus_id'] = $bus_id;
				header('location:manifestForm.php');

				}
				else{
					echo "<script>alert('This bus is full we will provide bus shortly')</script>";
				//$query1 = mysqli_query($conn,"UPDATE destination set sprinter_loading = 0 where route ='$destination' ");
				echo "<script>window.open('index.php','_self')</script>";
				$st = $st+1;
				}
				
				
			}
			else{
				echo "<script>alert('Sprinter is not loading to your destination now. Please choose other bus')</script>";
				echo "<script>window.open('selectBus.php','_self')</script>";
	 // echo("Error description: " . mysqli_error($conn));
}
mysqli_close($conn);			
}




 ?>