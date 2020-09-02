<?php
    $dbhost='localhost';
    $username='root';
    $password='';
    $db='f5';
    $conn=mysqli_connect ("$dbhost","$username","$password");
    
    mysqli_select_db($conn,$db);
?>