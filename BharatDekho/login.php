<!DOCTYPE html>
<html>
<head>
	<title>User LogIn And Registration</title>
	 <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.theme.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
  <div class="container">
  	<div class="login-box">
  	<div class="row">
  		<div class="col-md-6 login-left">
  			
  			<font size="3"color="black">
  			<h2>LogIn Here</h2></font> 
  			<form action="validation.php" method="post">
  			<div class="form-group">	
  				<font size="3"color="black"><label>Username</label></font>
  				<input type="text" name="user" class="form-contol" required>
  			</div>	
  			<div class="form-group">	
  				<font size="3"color="black"><label>Password</label></font>
  				<input type="password" name="password" class="form-contol" required><br></font>
             </div>
  				<button type="submit" class="btn btn-primary">Login</button>
  			</form>
  			</div>	
  			<br>
  		<div class="col-md-6 login-right">
  			<font size="3"color="black"><h2>Register Here</h2></font> 
  			<form action="registration.php" method="post">
  			<div class="form-group">	
  				<font size="3"color="black"><label>Username</label></font>
  				<input type="text" name="user" class="form-contol" required>
  			</div>	
  			<div class="form-group">	
  				<font size="3"color="black"><label>Password</label></font>
  				<input type="Password" name="password" class="form-contol" required><br>
  			</div>
  				<button type="submit" class="btn btn-primary">Register</button>
  					
  			</form>
  		</div>				
  		</div>
  	</div>
  </div>
</center>
</body>
</html>