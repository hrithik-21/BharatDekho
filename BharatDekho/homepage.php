<html>
<head>
  <title>BharatDekho-Registeration</title>
   <script src="js/main.js"></script>
 <STYLE TYPE="text/css">
BODY {background-image: url(img/w.jpg);
background-repeat: no-repeat;
background-size:100% 100%;
min-height:100px;
}
</STYLE>
  </head>
  <body>
  	<form action="homepage.php" method="post">
<bt><br>
<center>
<font face="Algerian" size="20"color="Violet">
Sign Up
</font> 
<br><br>
<font face="Castellar" >
<h1> Aadhar No<input type="text" name="adno" placeholder=" Aadhar No"  ></h1>
<br>
<h1>Name<input type="text" name="name" placeholder=" Name"></h1>
<br>
<h1>Mobile No<input type="text" name="mob" placeholder=" Mobile Number"></h1>
<br>
<h1>Password<input type="Password" name="pass" placeholder="Password"></h1>
<br>	
<input type="Submit" name="submit" value="submit">
</center>
<br><br>
</form>
</body>
</html>
<?php
    $dbhost='localhost';
    $username='root';
    $password='';
    $db='registration';
    $conn=mysqli_connect ("$dbhost","$username","$password");
    
    mysqli_select_db($conn,$db);
    if(isset($_POST['submit']))
    {
        $adno=$_POST['adno'];
        $name=$_POST['name'];
        $mob=$_POST['mob'];
        $pass=$_POST['pass'];
        $query=$conn,"INSERT INTO registration(,Aadhar No,Name,Password,Mob No) VALUES ($adno,"$name","$pass","$mob")";
        if(mysqli_query($conn,$query))
        {
        	echo "Successfully Inserted "
        }
    }
?>