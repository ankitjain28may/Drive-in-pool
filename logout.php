
<?php 

session_start();
#setcookie('email', 'pass' ,10, "/"); // 86400 = 1 day

if(empty($_SESSION['email']))
{
echo "Please Login";
die();
}
else
{

	unset($_SESSION['email']);
    header('Location: login.php');
}

?>
