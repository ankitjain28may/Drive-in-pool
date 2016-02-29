<?php
$email=$_POST['forg'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");



$q2 = "SELECT * FROM member where email = '$email'";
$a = mysqli_query($bd, $q2);
$b = $a->num_rows;

 if($b==0)
 {
 	echo 'You are not Registered, Please <a href="index.php">Register</a>';

 	die();
 }
 else
 {
 	$p="SELECT username FROM member where email='$email'";

$o = mysqli_query($bd, $p);
 	echo $o;
 	}
?> 