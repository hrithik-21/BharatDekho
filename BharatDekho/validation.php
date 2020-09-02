<?php
  session_start();
  $con=mysqli_connect('localhost','id12485186_hrithik_2108','hrihtik1234','id12485186_userregistration');
  mysqli_select_db($con,'id12485186_userregistration');
  $name=$_POST["user"];
  $pass=$_POST["password"];
  $s="select * from usertable where name='$name' && password='$pass'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    $_SESSION['username']=$name;
  	header('location:s.php');

  }
  else
  { 
    echo "Sorry Wrong Crendentials";
    header("refresh:3;url=login.php");
  }
?>