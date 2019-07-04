

<!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<title>Manifest</title>
			
			
	
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			
				<!-- Favicon -->
				<link rel="shortcut icon" href="assets/images/icon/favicon.png">
				
 </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f5f5f5">







<div class="container" style="height: 100%;">
	<div class="card" style="margin-top:15%;margin-bottom:15%;border: 2px solid grey; box-shadow: 0px 0px 10px 0px;height: 400px;height: 60%;" id="cardstyle">
		<div class="card-body">
			<h2 align="center" style="color: green;">MANIFEST</h2>
		</div>
		<form method="post" action="mainfestSave.php" class="form-group" name="main" role="form" style="padding: 10px 10px;">
			<div class="row">
				<div class="col-sm-6">
				<label>Surname:</label>
				<input class="form-control" type="text" name="surname" placeholder="enter your surname" id="surname" required> <br/>
				
				</div>
				<div class="col-sm-6">
				<label>Othername:</label>
				<input class="form-control" type="text" name="othername" placeholder="enter othername" id="othername" required><br/>
				</div>
				
				<div class="col-sm-6">
				<label>Email:</label>

				<input class="form-control" type="email" name="customeremail" placeholder="enter email" id="customeremail" required><br/>
					
				</div>
				<div class="col-sm-6">
				<label>Phone Number:</label>
				<input class="form-control" type="text" name="customerphone" placeholder="enter phone number" id="customerphone" maxlength="11" required><br/>
					
				</div>
				<div class="col-sm-6">
				<label>Address:</label>
				<input class="form-control" type="text" name="customeraddress" placeholder="enter address" id="customeraddress" required><br/>
					
				</div>
				<div class="col-sm-6">
				<label>name of next of kin:</label>
				<input class="form-control" type="text" name="nextkinname" placeholder="enter next of kin" id="password"  required><br/>
					
				</div>
				<div class="col-sm-6">
				<label>Phone Number of Next of kin:</label>
				<input class="form-control" type="text" name="nextkinPhone" placeholder="please next of kin phone" id="nextkinPhone" maxlength="11" required><br/>
					
				</div>
				<div class="col-sm-6">
				<label>Address of Next of kin:</label>
				<input class="form-control" type="text" name="nextkinAddress" placeholder="please next of kin address" id="nextkinAddress" required><br/>
					
				</div>
				 <button type="submit" class="btn btn-danger" name="manifest" id="manifest_btn" style="margin: 0px auto;" onclick="randomString()">SUBMIT</button>
			</div>
	<input type="text" name="ref" style="display: none;">
		
	</form>
		</div>
</div>






			
				   
				<script src="assets/js/jquery.min.js"></script><!-- jQuery -->
				
			  <script language="javascript" type="text/javascript">

function randomString() {
  //var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
  var string_length = 16;
  var randomstring = '';
  //for(var e=0; e<50; e++){
  for (var i=0; i<string_length; i++) {
    var rnum = Math.floor(Math.random() * chars.length);
    randomstring += chars.substring(rnum,rnum+1);
  }
  var coupon = randomstring.substring(0,4)+"-"+randomstring.substring(4,8)+"-"+randomstring.substring(8,12)+"-"+randomstring.substring(12,16);
  document.main.ref.value = coupon;
}
//}
</script>	


</body>
</html>