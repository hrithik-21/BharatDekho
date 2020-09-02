<?php
  include"..\php\connect.php";
  $query="INSERT INTO table_f5(AadharNo,Name,Password,MobNo) 
           VALUES(1234,'Hrithik','Hri','9113763713')
  ";
  $result=mysqli_query($conn,$query);
?>