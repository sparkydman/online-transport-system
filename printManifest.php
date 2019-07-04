<?php 
include 'database.php';
session_start();



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
			<h2 align="center" style="color: green;">GOD IS GOOD MOTORS WISH YOU SAFE JOURNEY</h2>
			<h6 align="center" style="color: green;margin-top: 20px;">BOOKING DETAILS</h6>

		</div>
	<div class="form-control" role="form">
				
                <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        
                            <th>Surname</th>
                             <th>Othername</th>
                              <th>Route</th>
                              <th>Bus Number</th>
                              <th>Bus</th>
                              <th>Seat</th>
                               <th>Sign</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($_POST['print'])) {
	$goingbus_id = $_POST['goingbus_id'];
	$goingbus_route = $_POST['goingbus_route'];
	
                    $sql = "SELECT * from customer where bus_id ='$goingbus_id' and destination ='$goingbus_route' ";
                    $result =mysqli_query($conn,$sql);
              
	if($result ->num_rows>0){
		while ($row=$result ->fetch_assoc()) {
	 	if(is_null($row['travelled'])){
                   ?>
                        <tr style="color: #3798da;">
                           <!--  <form method="POST" action="printManifest.php"> -->
                            <td><?php echo $row['surname'] ?> </td>
                             <td><?php echo $row['othername'] ?></td>
                              <td><?php echo $row['destination'] ?></td>
                              <td><?php echo $row['bus_id'] ?></td>
                              <td><?php echo $row['bus'] ?></td>
                              <td><?php echo $row['seats'] ?></td>
                              <td><input type="text" readonly style="border:none;" value='___________________'></a></td>
               
                        </tr>

                        <?php 
    $sql1 = mysqli_query($conn,"UPDATE customer set travelled = CURRENT_TIMESTAMP where bus_id = '$goingbus_id' and destination = '$goingbus_route' ");
                    }
                    }
        $qury = mysqli_query($conn,"SELECT * from available where motoid ='$goingbus_id'");
        if($qury->num_rows >0){
          while($row = $qury->fetch_assoc()){
            $motoid = $row['motoid'];
            $driverid = $row['driverid'];
            $route = $row['route'];
            $bus = $row['bus'];
            $trip = $row['trip'];
            $passenger = $row['passenger'];
            $income = $row['income'];
            $expense = $row['expenditure'];
            $net = $row['net'];
            
          }
           $q = mysqli_query($conn,"INSERT into history(motoid,driverid,route,bus,trip,passenger,income,expenditure,net) values('$motoid','$driverid','$route','bus','$trip','$passenger','$income','$expense','$net')");
           if($q){
              $ql = mysqli_query($conn,"DELETE from available where motoid ='$goingbus_id'");
                $sq21 = mysqli_query($conn,"UPDATE destination set hiace_loading = 0, sienna_loading = 0, sprinter_loading = 0 where route = '$goingbus_route'");
           }
        }
          }

                    }
                        ?>

                    </tbody>

                </table>
              </div>
            </div>
				<center><button type="button" class="btn btn-success btn-lg" align="center" style="margin: 10px auto;"><a href="sidebar.php" style="text-decoration: none;color: white;"><b>Print</b></a></button></center>
			</div>

		</div>
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				
</body>
</html>