<?php
session_start();
 if(empty($_SESSION['email']))
 {
  echo "Please Login Again";
  header('Location: login.php');
 }

?>

<!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <title>Bootstrap 101 Template</title>      
   	  <!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="dist/css/bootstrap.css">	
	 <link rel="stylesheet" type="text/css" href="style.css">	
        
   </head>
   
   <body>
   <div class="nav">
      <div class="row">
        <div class="col-sm-4">
          <h4>Drive in Pool</h4>
          </div>
        <div class="col-sm-2 col-sm-offset-4"><a href="about.html"><h4>About Us</h4></a></div>
        <div class="col-sm-2"><a href="logout.php"><h4>Log Out</h4></a></div>
    </div>
   </div>
   <div class="container ">
   	<div class="row">
   		<div class="col-sm-10 col-sm-offset-1">
   <div class="jumbotron">
     <form class="form-horizontal" role="form" id="myform" method="post" action="#database">    
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
             <p> What is your current location ?</p>
             <br><br>
        <input type="text" name="loc" placeholder="Enter your current location" required>
        <input type="submit" onclick="<?php unset($_SESSION['check']);?>">
        </div>
        </div>

     </form>
      <div class="container">
     <div class="row">
      <div class="col-sm-6 col-sm-offset-4">
     <img src="assets/Noida city centre.jpg">
     </div>
     </div>
     </div>
     <br><br>
     <hr>
   
     <div id="database" class="details">
       <div class="row">
        <!--<br>
        <div class="tile">
         <div class="col-sm-4 col-xs-12"><img src="assets/1.jpg"></div>-->
         <div class="col-sm-8 col-xs-12">
          <?php
          include "database.php";
          ?>
        
           <!--<h4><b>What is Drive in Pool?</b></h4>
           <br>
           <p>Drive in Pool is a web service that allows people to organise car pools without hassle.</p>
         </div>
       </div>
       <br><br>
       <div class="tile">
         <div class="col-sm-4 col-xs-12"><img src="assets/2.jpg"></div>
         <div class="col-sm-8 col-xs-12">
           <h4><b>How to use Drive in Pool?</b></h4>
           <br>
           <p>Simply select your current location , then you will see all the people engaged in car pool around you.</p>
         </div>
       </div>
       <div class="tile">
         <div class="col-sm-4 col-xs-12"><img src="assets/3.jpg"></div>
         <div class="col-sm-8 col-xs-12">
           <h4><b>How to conduct a Drive in Pool?</b></h4>
           <br>
           <p>You will be shown a list of all the people going along your route with their e-mails on it ,there you can chat with them and fulfill your requirement</p>
         </div>-->
       </div>
       </div>
     </div>
    
</div>
</div>
</div>


   </div>
      
     </script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
    <script src="dist/js/bootstrap.min.js"></script>


   </body>
</html>