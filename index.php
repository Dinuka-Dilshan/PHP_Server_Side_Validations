<?php

//all the things that are pass through the POST method will be stored in the _POST array. 
//it is gloabal and an associative array.

//htmlspecialchars method will convert any js injections to a html tag. so prevents injections
$toppings = "";
$email = "";
$type = "";

$errors = array("email"=>"","type"=>"","toppings"=>"");

if(!empty($_POST)){
  $toppings = htmlspecialchars($_POST['toppings']);
  $email = htmlspecialchars($_POST['email']);
  $type = htmlspecialchars($_POST['type']) ;


  if(empty($email)){
    $errors["email"] = "email is empty!";
  }

  if(empty($type)){
    $errors["type"] = "type is empty!";
  }

  if(empty($toppings)){
    $errors["toppings"] = "toppings are empty!";
  }
}


?>










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Mania</title>
  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
  />
</head>
<body >
  
  <nav  class="navbar navbar-light navbar-expand-lg bg-light px-lg-5 shadow-0 border-bottom" style="height: 8vh;">
    <div class="container-fluid px-lg-5   ">
      <a class="navbar-brand  fw-bold" href="index.php">YUMMY PIZZA</a> 

      <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link fw-bold" aria-current="page" href="index.php">Home</a>
        <a class="nav-link fw-bold" href="about.php">About</a>
        <a class="nav-link fw-bold" href="pricing.php">Pricing</a>
        <button type="button" class="btn btn-primary ">
          Order a Yummy Pizza
        </button>
      </div>
    </div>
  


    </div>
  </nav>







  <div class="container-md " style="height: 70vh;">
    <div class="row d-flex justify-content-center align-items-center" style="height: 100%;" >
      <div class="col-12 col-md-4">
        
        <div class="card text-center border shadow-0">
    
          <form action="index.php" method="post">

          <div class="card-body">
            <h5 class="card-title">ORDER A PIZZA</h5>
            <div class="form-outline m-3">
              <input type="email" id="form1" class="form-control" name="email" />
              <label class="form-label" for="form1">Email</label>
            </div>
            <p class="m-0 p-0"><?php  echo $errors["email"];?> </p>
            <div class="form-outline m-3">
              <input type="text" id="form1" class="form-control" name="type"/>
              <label class="form-label" for="form1">Pizza type</label>
            </div>
            <p class="m-0 p-0"><?php  echo $errors["type"];?> </p>
            <div class="form-outline m-3">
              <textarea class="form-control" id="form1" cols="30" rows="2" name="toppings"></textarea>
              <label class="form-label" for="form1">Toppins (Comma separated values)</label>
            </div>
            <p class="m-0 p-0"><?php  echo $errors["toppings"];?> </p>
              <button class="btn btn-primary mx-2 mt-2"type="submit">Order a yummy pizza</button>
            
            
          </div>

        </form>
          <div class="card-footer text-muted">Free Delivery</div>
        </div>
      




      </div>
    </div>
  </div>

  
  <footer class="bg-light text-center text-lg-start fixed-bottom"  style="height: -15vh;">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="#">Yummy Pizza.lk</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>