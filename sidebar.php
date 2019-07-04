<?php 
  require 'database.php';
session_start();
if(!isset($_SESSION['login_admin'])){
header('location:index.php');
}

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="5" > -->

    <title>Administration Page</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="shortcut icon" href="assets/images/icon/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="admin.css">
        <!-- <link rel="stylesheet" href="otherStyle.css"> -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css"  media="screen">
          <link rel="stylesheet" href="style5.css">
    <!-- Font Awesome JS -->
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


         <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body ata-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <h3><a href="index.php"><img src="assets/images/logo_1.png" ></a></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Administration Section</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-home"></i>
                    Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Teams</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </li>
              <li>
                    <a href="#" class="button" id="show_vehicles">
                     <i class="fas fa-bus"></i>
                 Available Vehicles</a>
                </li>
                <li>
                    <a href="#" class="button" id="show_reports"> 
                        <i class="fas fa-briefcase"></i> 
                   Daily Report</a>
                   
                </li>
                
                <li>
                    <a href="#" class="button" id="show_reg_driver">
                     <i class="fas fa-paper-plane"></i>
                 Register Driver</a>
                </li>
                <li>
                    <a href="#" class="button" id="show_ref_code">
                     <i class="fas fa-image"></i>
                 Verify Ref. Code</a>
                </li>


                <li>
                    <a href="#" class="button" id="show_complains">
                     <i class="fas fa-image"></i>
                 Reports/Complains</a>
                </li>
                <li>
                    <a href="#" class="button" id="show_readybus">
                     <i class="fas fa-printer"></i>
                 View Manifest</a>
                </li>

                <li>
                    <a href="#" class="button" id="show_setting">
                     <i class="fas fa-gears"></i>
                Settings</a>
                </li>

                <li>
                    <a href="logout.php" class="button" id="logout">
                     <i class="fas fa-image"></i>
                 Logout</a>
                </li>

            </ul>

           
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <div class="col-md-8">
                            <form class="form-group" action="#" method="post">
                               <div class="row">
                                <div class="col-md-1"></div>

                                   <!-- <div class="col-md-9">
                                       <input type="text" name="search" class="form-control" placeholder="Search across the database">
                                   </div> -->
                                   <!-- <div class="col-md-2"> -->
                                      <!--  <input type="submit" pull-right name="search" class="btn btn-md btn-primary" value="Logout"> -->
                                   <!-- </div> -->
                               </div> 
                            </form>
                            
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-fluid" >

                <!---avaible bus in the station--->
                <div class="container-fluid" id="available">
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; " >
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">PARKED VEHICLES</h5>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        
                            <th>Motor ID</th>
                             <th>Driver ID</th>
                              <th>Route</th>
                              <th>Arrival Time</th>
                              <th>Bus</th>
                               <th>Statue</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                    $query =mysqli_query($conn,"SELECT * from available where status='0' order by arrival asc");
                    if($query->num_rows>0){
                    while($row=$query->fetch_assoc()){

                     ?>
                        <tr >
                            
                            <td><a href="#"> <?php echo $row['motoid'] ?> </a></td>
                             <td><a href="#"><?php echo $row['driverid'] ?></a></td>
                              <td><a href="#"><?php echo $row['route'] ?></a></td>
                              <td><a href="#"><?php echo $row['arrival'] ?></a></td>
                              <td><a href="#"><?php echo $row['bus'] ?></a></td>
                               <td><a href="#"><b style="color:blue;">PARKED</b></a></td>
                        </tr>
                        <?php }} ?>

                    </tbody>

                </table>

                 <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">LOADING VEHICLES</h5>
                </div>
                <table class="table table-hover " id="loading_table">
                    <thead>
                        <tr>
                        
                            <th width="7%">Motor ID</th>
                             <th>Driver ID</th>
                              <th width="12%">Route</th>
                              <th>Arrival Time</th>
                              <th>Departure</th>
                              <th width="7%">Bus</th>
                              <th width="5%">Passenger</th>
                              <th>Income</th>
                               <th>Statue</th>
                               <th>Enter Expenses</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                    $query =mysqli_query($conn,"SELECT * from available where status='1' order by arrival asc");
                    if($query->num_rows>0){
                    while($row=$query->fetch_assoc()){

                     ?>
                        <tr >
                            <form method="POST" >
                            <td contenteditable="true" id="motoid"><?php echo $row['motoid'] ?></td>
                             <td><?php echo $row['driverid'] ?></td>
                            <td  contenteditable="true" id="route"><?php echo $row['route'] ?></td>
                              <td ><?php echo $row['arrival'] ?></td>
                              <td ><?php echo $row['departure'] ?></td>
                              <td ><?php echo $row['bus'] ?></td>
                              <td><?php echo $row['passenger'] ?></td>
                            <td  contenteditable="true" id="income"><?php echo $row['income'] ?></td>
                               <td><b style="color: #fb9500;">LOADING</b></td>
                               <td  contenteditable="true" id="expenses"></td>
                               <td><button type="button" class="btn btn-xs btn-success clearbus"  name="clearbus">Clear</button></td></form>
                        </tr>
                        <?php }} ?>

                    </tbody>

                </table>
              </div>
                            <div class="container" id="readybus" style="display: none;">
                 <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; "  >
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">TRAVELLING VEHICLES</h5>
                </div>
                <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        
                            <th>Motor ID</th>
                             <th>Driver ID</th>
                              <th>Route</th>
                              <th>Arrival Time</th>
                              <th>Bus</th>
                               <th>Statue</th>
                              
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                    $query =mysqli_query($conn,"SELECT * from available where status='2' order by arrival asc");
                    if($query->num_rows>0){
                    while($row=$query->fetch_assoc()){

                     ?>
                        <tr >
                            <form method="POST" action="printManifest.php">
                            <td><a href="#"><input type="text" readonly name="goingbus_id" style="border:none;" value='<?php echo $row['motoid'] ?> '></a></td>
                             <td><a href="#"><?php echo $row['driverid'] ?></a></td>
                              <td><a href="#"><input type="text" readonly name="goingbus_route" style="border:none;" value='<?php echo $row['route'] ?> '></a></td>
                              <td><a href="#"><?php echo $row['arrival'] ?></a></td>
                              <td><a href="#"><?php echo $row['bus'] ?></a></td>
                               <td><a href="#"><b style="color: #a6e22b;">READY TO MOVE</b></a></td>
                               <td><button type="submit" class="btn btn-xs btn-success"  name="print">Print</button></td></form>
                        </tr>
                        <?php }} ?>

                    </tbody>

                </table>
              </div>
            </div>

            <!---handle the completed trip of the customer--->

             


             


            <div class="container-fluid" id="settings1" style="display: none;" >
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">SETTING PANEL</h5>
                </div>
                <div class="card" >
              <!-- <form class="form-group" method="post" action="" style="margin-top: 20px;margin-left: 20px;"> -->
                <form method="POST" action="available_bus.php" class="form-group">
                <!-- <div class="row"> -->
               <table style="margin-top: 20px;" align="center" cellspacing="5px">
                <tr>
                  <td width="8%" style="margin-left: 5px;"><label for ="bus_available" class="control-label">Motor ID</label></td>

                <td width="20%" style="margin-left: 0px;">
                  <!-- <input type="text" name="bus_available" class="form-control" placeholder="enter motor id..."> -->

                     <select class="form-control" name="bus_available">
                        <!-- <option value="">Motor ID</option> -->
                        <?php
                        // require_once('database.php');
                        $qle = $conn->query('select * from driver_info');

                        if ($qle ->num_rows>0) {
                            while ($result=$qle->fetch_assoc()) {
                             ?>
                              <option value="<?php echo $result["car_id"]; ?>"><?php echo $result["car_id"]; ?></option> 
                              <?php
                            }
                        }
                         ?>
                       </select>

               </td>
                <td width="5%">
                  <label class="control-label">Trip:</label></td>

                 <td width="10%"> 
                  <input type="text" name="bus_trip" class="form-control" placeholder="enter the bus trip...">

                </td>
                <td width="10%"> <label for ="date" class="control-label">Departure Date:</label></td>
                <td width="20%">
                            
              <input type="text" name="date"  class="form-control form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" readonly required="required">
           </td>
                <td width="10%">
                  <button type="submit" class="btn btn-md btn-info" name="avaible_bus"><i class="fa fa-bus "></i> Park Bus</button>

                </td></tr>
              </table>
              </form>
              <!-- </div> -->
                <div class="col-md-4" style="margin-top: 20px;"> 
                  <button type="button" class="btn btn-md btn-info" id="opensetting"><span ><i class="fa fa-plus-circle "></i> Price Setting</span></button>

                </div><br/>
              
                
                


               
                    <div style="display: none" id="pricepanel">
                    <div style="margin-left: 20px;margin-right:  20px;">
                    
                  
                     
                   
                  <!-- <div class="row" > -->
                    <table><tr>
                   <td width="10%"><label class="control-label">Station:</label></td>
                    
                      
                      <td width="30%"><select class="form-control" name="station"  id="terminal_price" onchange="destination(this.id,'destination_price')">
                        <option value="">Select Station</option>
                        <?php
                                
                               
                        $qle = $conn->query('select * from terminal');

                        if ($qle ->num_rows>0) {
                            while ($result=$qle->fetch_assoc()) {
                              $rowid = $result["id"];
                             ?>
                              <option value="<?php echo $result["id"]; ?>"><?php echo $result["city"]; ?></option> 
                              <?php
                            }
                        }
                       
                                ?>
                      </select></td>
                    

                      <td width="10%"><label class="control-label">Route:</label></td>
                      <td width="%30"><select class="form-control" name="station"  id="destination_price">
                                           

                      </select></td>
                   
                    <td width="20%"><button class="btn btn-md btn-search" id="setprice" ><i class="fa fa-search"> </i> Search</button></td>
                   </tr>
                  <!-- </div> -->
</table>
                  <br/>
 <div class="form-group">
<div class="row">
  <div class="col-md-3">
    <label >Hiace:</label>
    <input type="text" name="hiace_price" id ="hiace_price" class="form-control">
  </div>
  <div class="col-md-3">
    <label >Sienna:</label>

    <input type="text" name="sienna_price" id ="sienna_price" class="form-control">
  </div>
  <div class="col-md-3">
    <label >Sprinter:</label>

    <input type="text" name="sprinter_price" id ="sprinter_price" class="form-control">
  </div>
  <div class="col-md-3" style="margin-top: 30px;">
    <span id="mark_suc" style="color:#28a745;"></span>
    <span id="mark" style="display: none;"><img src="assets/images/sucess.png" width="32" height="32"></span>
  </div>
</div>
</div>
<div align="center"><button class="btn btn-lg btn-success" id="saveprice" style="margin: 10px auto;">Save</button></div>



</div>
                  </div>
           
          </div>

            </div>



            <div class="container-fluid" style="display: none;" id="report">
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">TODAY'S REPORT</h5>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                       
                            <th>Motor ID</th>
                             <th>Driver ID</th>
                              <th>Route</th>
                               <th>Bus</th>
                               <th>Passenger</th>
                               <th>Trip</th>
                             
                                <th>Income</th>
                                <th>Expenditure</th>
                                <th>Net Income</th>
                               
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $query =mysqli_query($conn,"SELECT * from history  order by datework asc");
                    if($query->num_rows>0){
                    while($row=$query->fetch_assoc()){
                       $income= $row['income'] ;
                              $expendit= $row['expenditure'] ;
                              $net = $income - $expendit;
                     ?>
                        <tr >
                            
                            <td><a href="#"> <?php echo $row['motoid'] ?> </a></td>
                             <td><a href="#"><?php echo $row['driverid'] ?></a></td>
                              <td><a href="#"><?php echo $row['route'] ?></a></td>
                              <td><a href="#"><?php echo $row['bus'] ?></a></td>
                              <td><a href="#"><?php echo $row['passenger'] ?></a></td>
                          <td><a href="#"> <?php echo $row['trip'] ?> </a></td>
                             <td><a href="#"><?php echo $row['income'] ?></a></td>
                              <td><a href="#"><?php echo $row['expenditure'] ?></a></td>
                              <td><a href="#"><?php echo $net ?></a></td>
                        </tr>
                        <?php }} ?>

                    </tbody>
                </table>
            </div>

           


             <div class="container-fluid" style="display: none;" id="new_driver">
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">REGISTER NEW DRIVER</h5>
                </div>
                  <form class="form-group" action="driver_detail.php" method="post" >
                <div class="card" style="border-color: #a4a5a7; padding: 10px 5px; background-color: #6d7fcc;color: #ffff;"> Personal Details 
                    <hr>
                  
                
                    <div class="row" >
                        <div class="col-md-4">
                    <label>Surname :</label>
                    <input type="text" name="surname" class="form-control">                    
                    </div>

                    <div class="col-md-4">
                    <label>Firstname:</label>
                    <input type="text" name=firstname class="form-control">                    
                    </div>

                    <div class="col-md-4">
                    <label>Othername:</label>
                    <input type="text" name="othername" class="form-control">                    
                    </div>

                
                    <!-- <select class="form-control" name="date_of_birth">
                        <option value="" ></option>
                    </select> -->
                     <div class="col-md-2" >
                      <label class="control-label">Age</label>
                    <input class="form-control "  type="text" value="" name="date_of_birth" maxlength="2">
                    
                </div>
                    <!--  <input type="text" name="date_of_birth" class="form-control" id="date">   --> 
              
              
                <div class="col-md-4">
                   <label class="control-label">Sex:</label>
                 </br>
                      <label >
                  <input type="radio" class="radio-inline" name="sex" id="option1" autocomplete="off" value="Male"> Male
                </label>
                <label >
                  <input type="radio"  class="radio-inline" name="sex" id="option2" autocomplete="off" value="Female"> Female
                </label>
              </div>
                
                <div class="col-md-4">
                    <label>Driver's Licence Number:</label>

                    <input type="text" name="licence" class="form-control" maxlength="10">
                </div>
              <div class="col-md-10" style="padding: 10px;"></div>
                
                <div class="col-md-3">
                    
                      <label>State Of Origin:</label>
                    <select class="form-control" name="state" id="state_origin" onchange="getlocal(value)">
                   <option value="">Select State</option>
                         <?php
                         include('database.php'); 
                           $result=mysqli_query($conn,"SELECT*FROM states");
              while($row=$result->fetch_array()){?>
               <option value="<?php echo $row['State'];?>"><?php echo $row['State'];?></option>
              
            <?php } 
                           ?>  
                               
                    </select>
                </div>

                 
                <div class="col-md-4">
                    <label>LGA Of Origin:</label>
                    <select class="form-control" name="lga" id="lga_origin">
                     <option value=""></option>
                     
                    </select>
                </div>
                 <div class="col-md-4">
                    <?php
                                require_once('database.php');
                                $country_result = $conn->query('select * from countries');
                                ?>

                    <label class="control-label">Nationality:</label>
                    <select class="form-control" name="country_1">
                          <option value="">select Country</option>
                        <?php
                                        if ($country_result->num_rows > 0) {
                                    while($row = $country_result->fetch_assoc()) {
                                      
                                        ?>
                                        <option value="<?php echo $row["Country"]; ?>"><?php echo $row["Country"]; ?></option>
                                        <?php
                                        }
                                    }
                                ?>
                      
                    </select>
                </div>
                <div class="col-md-4">
                       <label>Phone:</label>
                    <input type="text" name="phone" class="form-control" maxlength="11">
                </div>
                 <div class="col-md-7">
                       <label>Email:</label>
                    <input type="email" name="email" class="form-control" >
                </div>
            
                <div class="col-md-8">
                       <label>Permanent Address:</label>
                    <input type="text" name="per_address" class="form-control" >
                </div>
                
                <div class="col-md-10">
                    <label>Resident Address:</label>
                    <input type="text" name="resident" class="form-control">
                </div>

                </div>
               
            </div>

            <div class="card" style="border-color: #a4a5a7; padding: 10px 5px; background-color: #6d7fcc;color: #ffff;"> Bus Details 
                    <hr>
                  
                    <div class="row" >

                         <div class="col-md-4">
                    <label>Car Model:</label>
                    <select class="form-control" name="car_model">
                      <option value="Hiace">Toyota Hiace Bus</option>
                      <option value="Sienna">Toyota Sienna Mini Bus</option>
                      <option value="Sprinter">Mercedes Sprinter Bus</option>
                    </select>
                </div>
                 <div class="col-md-3">
                    <label>Engine Number:</label>
                    <input type="text" name="car_engine" class="form-control" maxlength="12">
                </div>
                <div class="col-md-3">
                    <label>Plate Number:</label>
                    <input type="text" name="plate_no" class="form-control" maxlength="8">
                </div>
                <div class="col-md-2">
                    <label>Bus Seaters:</label>
                   <select class="form-control" name="seaters">
                   <option value="12">12</option>
                   <option value="8">8</option>
                  </select>
                </div>
                 <div class="col-md-4">
                  <label>Bus Terminal:</label>
                     <select class="form-control" id="terminal_reg" onchange="regRoute()">
                        <option value="">Select Terminal</option>
                        <?php
                        require_once('database.php');
                        $qle = $conn->query('select * from terminal');

                        if ($qle ->num_rows>0) {
                            while ($result=$qle->fetch_assoc()) {
                             ?>
                              <option value="<?php echo $result["id"]; ?>"><?php echo $result["city"]; ?></option> 
                              <?php
                            }
                        }
                         ?>
                       </select>
                </div>
               
                 <div class="col-md-4">
                  <label>Bus Route:</label>
                     <select class="form-control" name="route" id="route_reg">
                        <!-- <option value=""></option> -->
                       </select>
                </div>



                    </div>
                 
                </div>

                 <div class="card" style="border-color: #a4a5a7; padding: 10px 5px; background-color: #6d7fcc;color: #ffff;"> Next of Kin Details: 
                    <hr>
                
                    <div class="row" >
                        <div class="col-md-4">
                    <label>Surname :</label>
                    <input type="text" name="kin_surname" class="form-control">                    
                    </div>

                    <div class="col-md-7">
                    <label>Othername:</label>
                    <input type="text" name="kin_othername" class="form-control">                    
                    </div>

                     <div class="col-md-4">
                       <label>Phone:</label>
                    <input type="text" name="kin_phone" class="form-control" maxlength="11">
                </div>
                <div class="col-md-3">
                       <label>Relationship:</label>
                    <input type="text" name="kin_relation" class="form-control" maxlength="20">
                </div>
                
                 <div class="col-md-7">
                       <label>Email:</label>
                    <input type="email" name="kin_email" class="form-control" >
                </div>
            
                
                <div class="col-md-10">
                    <label>Resident Address:</label>
                    <input type="text" name="kin_address" class="form-control">
                </div>

                <div class="col-md-4" style="margin: 20px auto;">
                  <!-- <input type="submit" name="btnsave" class="btn btn-primary" title="click to save"  value="Submit" > -->
                    <button type="submit" name="btnsave" class="btn btn-light" title="click to save" >
        <span class="glyphicon glyphicon-save"></span> &nbsp; Submit
        </button> 
         </div>
                    </div>
           

            </div>
        
          </form>

            </div>

                 <div class="container-fluid" style="display: none;" id="ref_code_no">
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">VERIFY CUSTOMER'S REF. CODE STATUE</h5>
                <hr>
                <div class="card-body" style="margin-top: 50px;">
                  <form class="form-group" action="refcode.php" method="post">
                    <div class="row" >
                        <div class="col-md-8">
                           <input type="text" name="ref_code" class="form-control" placeholder="enter customer's ref. code">
                        </div>
                        <div class="col-md-3">

                           <input type="submit" name="ref_code_btn" class="btn btn-light" value="Search">
                        </div>

                    </div>
                </form>
                </div>
                </div>
            </div>
                <div class="container-fluid" style="display: none;" id="complain">
                <div class="card-body" style="background-color: #6d7fcc;color: #ffff;  margin-top: 0px; ">
                    <h5 style="text-align: center; font-style: bold; font-family: 'aria-label', sans-serif;
                font-weight: 300; text-transform: uppercase; ">CUSTOMERS REPORTS AND COMPLAINS</h5>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10%">Name</th>
                            <th width="10%">Email</th>
                             <th width="10%">Subject</th>
                              <th width="70%">Message</th> 
                              
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                          <?php
                         $query =mysqli_query($conn,"SELECT * from report  order by id desc");
                    if($query->num_rows>0){
                    while($row=$query->fetch_assoc()){
                     
                     ?>
                        <tr >
                            
                            <td><a href="#"> <?php echo $row['name'] ?> </a></td>
                             <td><a href="#"><?php echo $row['email'] ?></a></td>
                              <td><a href="#"><?php echo $row['subject'] ?></a></td>
                              <td><a href="#"><?php echo $row['message'] ?></a></td>
                         
                        </tr>
                        <?php }} ?>
                             
                        </tr>

                    </tbody>

                </table>
            </div>
          </div>

        </div>
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

    <script type="text/javascript" src="admin.js"></script>
  

   <script type="text/javascript">
      function getlocal(value)
{
  value = $("#state_origin")[0].selectedIndex;
$.ajax({
 url:"get_states.php",
 type:"POST",
 data:{id1:value},
 success: function(data){
  $("#lga_origin").html(data);
 
 }
});
return false;
}

    </script>
    
<script type="text/javascript">
  function destination(id,destination)
{
  //var idvalue = id;
  var value = document.getElementById(id).selectedIndex;
  
$.ajax({
 url:"get_states.php",
 type:"POST",
 data:{id2:value},
 success: function(data){
 $('#destination_price').html(data);
 
 }
});
return false;
}
</script>
<script type="text/javascript">
  function regRoute()
{
  var value=$("#terminal_reg")[0].selectedIndex;
  // alert(value);
$.ajax({
 url:"get_states.php",
 type:"POST",
 data:{id4:value},
 success: function(data){
  $("#route_reg").html(data);
 
 }
});
return false;
}
</script>


<script type="text/javascript">
  $('#opensetting').click(function(){
    $('#pricepanel').show();
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

<script type="text/javascript">
  $('button.clearbus').on('click',function(){
    var loading_table = document.getElementById('loading_table').getElementsByTagName('tbody')[0];
    var rownum = $(this).closest('tr').index(),

      motoid = loading_table.rows[rownum].cells[0].innerHTML,
      route = loading_table.rows[rownum].cells[2].innerHTML,
      income = loading_table.rows[rownum].cells[6].innerHTML,
      expenses = loading_table.rows[rownum].cells[9].innerHTML;
      // alert(motoid + route + income + expenses);
      $.ajax({
        url: "clearbus.php",
        method: "post",
        data:{motoid:motoid,route:route,income:income,expenses:expenses},
        success:function(data){
         window.open('sidebar.php','_self');
       $('#available').hide();
        $('#settings1').hide();
         $('#report').hide();
          $('#complain').hide();
           $('#new_driver').hide();
            $('#ref_code_no').hide();
        
        $('#readybus').show();
        }
      });

  });
</script>
<!-- <script type="text/javascript">
  $('#searchbtn1').click(function(){
    var value=$("#terminal_price")[0].selectedIndex;
    $.ajax({
      url:"price_table.php",
      method:"post",
      data:{value:value},
      success:function(data){
        $('#price_list').html(data);
      }
    });
  });

</script> -->
<script type="text/javascript">
  
$('#setprice').click(function(){
   $('#mark_suc').html('');
   $('#mark').hide();
  var terminal = $('#terminal_price').val();
  var route = $('#destination_price').val();
 
     
     

        $.ajax({
          url: "price_table.php",
          method: "post",
          data: {route:route},
          dataType: "JSON",
          success:function(data){
             $('#hiace_price').val(data.hiace);
        $('#sienna_price').val(data.sienna);
      $('#sprinter_price').val(data.sprinter);
          }
        });
});
</script>
<script type="text/javascript">
  $('#saveprice').click(function(){
  var route = $('#destination_price').val();
  var hiace = $('#hiace_price').val();
  var sienna = $('#sienna_price').val();
  var sprinter = $('#sprinter_price').val();
   $.ajax({
          url: "saveprice.php",
          method: "post",
          data: {route:route,hiace:hiace,sienna:sienna,sprinter:sprinter},
                   success:function(data){
             $('#mark_suc').html(data);
          $('#mark').show();
          }
        });
});
</script>
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
</script>
</body>

</html>