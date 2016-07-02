<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

<div class="header">
</div>

<?php if(!isset($_SESSION["userData"])):?>
<div class="prijava_button">
  <button data-toggle="modal" data-target="#myModal"><img src="images/login.png" alt="Login" /> </button>
</div>
<?php else:?>
	<a href="odjava.php"><button class="prijava_button"> Odjava </button> </a>
<?php endif;?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#rijeseni_problemi">RIJEŠENI PROBLEMI</a></li>
        <li><a href="#prijavi_problem">PRIJAVI PROBLEM</a></li>

<!--ADMIN -->
        <li><a href="index.php">NASLOVNA</a></li>
        <li><a href="problemi.php">PROBLEMI</a></li>

<!---->
      </ul>


    </div>
  </div>
</nav>

