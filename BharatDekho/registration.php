<?php
  session_start();
  $con=mysqli_connect('localhost','id12485186_hrithik_2108  ','hrihtik1234','id12485186_userregistration');
  mysqli_select_db($con,'id12485186_userregistration');
  $name=$_POST["user"];
  $pass=$_POST["password"];
  $s="select * from usertable where name='$name'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
  	echo "Sorry! UserName Already Taken";

  }
  else
  {
  	$reg="insert into usertable(name,password) values ('$name','$pass')";
  	mysqli_query($con,$reg);
  	echo"Registration Successful";
  }
?>