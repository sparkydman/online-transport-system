<?php 
include 'database.php';
session_start();
if($_POST){
	$data = $_POST;
	// $input_password = $_POST['loginpassword'];
	// $input_username = $_POST['loginusername'];
	if(($data['loginpassword'] == $password) && ($data['loginusername'] == $username)){
		$_SESSION['login_admin']='yes';
		header('location:sidebar.php');
	}else{
		echo "<script>alert('Wrong Password')</script>";
	}

	}
 ?>


<!DOCTYPE html>
 <html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>GIG ADMIN LOGIN</title>
      
      
  
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/icon/favicon.png">
        
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">





<div class="container" style="height: 100%;">
  <div class="card" style="margin-top:15%;border: 2px solid grey; box-shadow: 0px 0px 10px 0px;height: 400px;" id="cardstyle">
    <div class="card-body">
      <h2 align="center" style="color: green;">ADMIN LOGIN</h2>
    </div>
    <form class="form-group" method="post" style="margin-right: 10px ;margin-left: 30px ;">
    <label>Username:</label>
        <input class="form-control" type="text" name="loginusername" placeholder="enter your email" id="username" required> <br/>
        <label>Password:</label>
        <input class="form-control" type="password" name="loginpassword" placeholder="enter passward" id="loginpassword" required>


  <button type="submit" class="btn btn-success btn-lg" style="margin: 20px auto;" ><b>LOGIN</b></button>
</form>
    </div>
</div>






      
           
        <script src="assets/js/jquery.min.js"></script><!-- jQuery -->
        
        


</body>
</html>