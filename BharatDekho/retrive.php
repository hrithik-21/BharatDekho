<?php
include "..\php\connect.php";
$query="select * from table_f5";
$result=mysqli_query($conn,$query);
//Display
while($value=mysqli_fetch_array($result))
{
	echo $value['Name'];
}
?>