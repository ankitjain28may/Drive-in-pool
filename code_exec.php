
<?php

session_start();
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mob=$_POST['mob'];
$loc=$_POST['loc'];
$mysql_hostname = $IP;
$mysql_user = ankitjain28;
$mysql_password = "";   
$mysql_database = c9;



//check the validation of email address.
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
{

	if(strlen($mob)==10)
	{





		$bd = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

		//check whether the email is already registered or not.
		
		$query="CREATE TABLE IF NOT EXISTS account (
		mem_id int primary key auto_increment unique not null,
		name varchar(255) not null,
		email varchar(255) unique not null,
		location varchar(255) not null,
		mob varchar(255) not null
		 ) ENGINE=INNODB;";
	//run the query

	if($bd->query($query));
  		
  		//query created

		$query="CREATE TABLE IF NOT EXISTS login_info (
			login_id int primary key auto_increment unique not null,
			email varchar(255) unique not null,
			pass varchar(255) not null,
			same_id int not null,
			FOREIGN KEY (same_id) REFERENCES account(mem_id)
			 ) ENGINE=INNODB;";
 
        if($bd->query($query));


		$q2 = "Select * from account where email = '$email'";

		$a = mysqli_query($bd, $q2);

		$b = $a->num_rows;

 		if($b!=0)
 		{
 			
 			//echo '<script> alert("Email is already registered") </script>';
 			$_SESSION['error']="Email is already registered";
 			header("Location: index.php");
 			//If found die.
 		}

 		//If email is not registered.

 		else
 		{

			//Input elements in the account table in db.

			$pass1 = md5($pass); //encrypt the password.

			$query = "INSERT INTO account  VALUES(null, '$user', '$email','$loc','$mob')";

			if (mysqli_query($bd, $query))
			{	

				//Take the id for the foreign key.

		   		$id= "SELECT mem_id from account where email='$email'";
	
				$result= $bd->query($id);


    			$row = $result->fetch_assoc();
        		$p= $row["mem_id"];
    		

            	//Store the value in the Login_info db

		    	$query1= "INSERT INTO login_info values(null, '$email','$pass1','$p')";

			    //Execute the query

    			if(mysqli_query($bd, $query1))
    			{
					$_SESSION['email']=1; //to make his session active

					$_SESSION['count']=1; //to print registration successful for the first time
					
					header('Location: home.php');
				}

				//If query doesnt get execute

				else
				{
					echo "Disconnect";
					die();
					//Disconnect
				}
			}

			else
			{
				echo "Disconnect";
				die("he");
			}

		}


	}

	else
	{
		$_SESSION['error']="Invalid Mobile Number";
 			header("Location: index.php");
	}

}

else 
{

  $_SESSION['error']="$email is not a valid email addreass";
 			header("Location: index.php");
  //Email is not valid
}





?>