<?php
session_start();
if (isset($_SESSION['email'])) {
 
header('Location:home.php');

}




?>


<!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <title>Carpool | Login</title>      
   	  <!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="dist/css/bootstrap.css">	
	 <link rel="stylesheet" type="text/css" href="style.css">	      
   </head>
   
   <body>
    <div class="nav">
      <h3 style="color:white">Drive in Pool</h3>
   </div>
  
  



   <div class="container ">
   	<div class="row">
   		<div class="col-sm-8 col-sm-offset-2">
   <div class="jumbotron">
      	<div class="row">
      		<div class="col-sm-8 col-sm-offset-2">
      		<h3><span class="glyphicon glyphicon-triangle-right"></span>&nbsp;Register</h3>
      		<br>
      		</div>
        </div>
        <?php
      if(isset($_SESSION['error']))
      {
        ?>
        <div class="container">
    <div class="row">
      <div class="col-sm-12" style="text-align:center;color:red;">
         
       <?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      ?>
      
  </div>
</div>
  </div>
      <?php
      }
    ?>
        <form class="form-horizontal" role="form" id="myform" method="post" action="code_exec.php">
        <div class="form-group has-feedback">
        	<div class="col-sm-8 col-sm-offset-2">
        		<span class="form-control-feedback glyphicon glyphicon-heart"></span>
        	<input type="name" class="form-control" name="user" placeholder="Name" required >

        	</div>

        </div>
        <div class="form-group has-feedback">
          <div class="col-sm-8 col-sm-offset-2">
            <span class="form-control-feedback glyphicon glyphicon-user"></span>
          <input type="email" class="form-control" name="email" placeholder="E-mail" required >

          </div>
          
        </div>
        <div class="form-group has-feedback">
        	<div class="col-sm-8 col-sm-offset-2">
        		<span class="form-control-feedback glyphicon glyphicon-pencil"></span>
         	<input type="password" class="form-control" name="pass" placeholder="Password" required >
         	</div>

        </div>
       <div class="form-group has-feedback">
          <div class="col-sm-8 col-sm-offset-2">
            <span class="form-control-feedback glyphicon glyphicon-thumbs-up"></span>
          <input type="name" class="form-control" name="loc" placeholder="Current location" required >
          </div>
          <br>
          <br>
          <br>

          
           <div class="form-group has-feedback">
          <div class="col-sm-8 col-sm-offset-2">
            <span class="form-control-feedback glyphicon glyphicon-thumbs-up"></span>
          <input type="tel" class="form-control" name="mob" placeholder="Mobile" required >
          </div>
          
        </div>
        <br>
        <div class="form-group">
        	<div class="row">
        	<div class="col-sm-2 col-xs-offset-1 col-sm-offset-2">
        <button type="Submit" class="btn btn-success btn-lg">Go!</button>
            </div>
            <div class="col-sm-4 col-xs-offset-1 col-sm-offset-4">
            	<br>
            	<a href="forgot.php">Forgot Password ?</a>        
            </div>          
        </div>
        <br> <br>
        <div class="form-group">
        	<div class="row">
        		<div class="col-sm-offset-3 col-xs-offset-1">
        		<a href="login.php">If you have already registered , click here to Login</a>
        		</div>
        	</div>
        </div>
        </div>
     </form>

</div>
</div>
</div>


   </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
    <script src="dist/js/bootstrap.min.js"></script>


   </body>
</html>
