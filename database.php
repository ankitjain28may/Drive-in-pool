<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "carpool";
$prefix = "";
$loc=$_POST['loc'];

$bd = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

$q2 = "SELECT * FROM account WHERE location LIKE '%$loc%'";  //check for the avalavility of email address

$result=$bd->query($q2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    	echo '<div class="container">
    	<div class="row">
    	<div class="col-sm-12 col-sm-offset-3" style="color:green">';
        echo "<b>Name:</b> " . $row["name"]. "<br>Email: " . $row["email"]. "- Location " . $row["location"]."- mob".$row["mob"]."<br>";
        echo '</div>
        </div>
        </div>';
    }
}
else
{
    echo '<div class="container">
        <div class="row">
        <div class="col-sm-12 col-sm-offset-7" style="color:red">';
	echo "No user find at this location";
     echo '</div>
        </div>
        </div>';
}

?>