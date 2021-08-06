<?php

//all the things that are pass through the POST method will be stored in the _POST array. 
//it is gloabal and an associative array.

//htmlspecialchars method will convert any js injections to a html tag. so prevents injections
$toppings = "";
$email = "";
$type = "";

$errors = array("email"=>"","type"=>"","toppings"=>"");

if(!empty($_POST)){
  $isEmailTrue = true;
  $isTypeTrue = true;
  $isToppingsTrue = true;

  $toppings = htmlspecialchars($_POST['toppings']);
  $email = htmlspecialchars($_POST['email']);
  $type = htmlspecialchars($_POST['type']) ;


  if(empty($email)){
    $errors["email"] = "email is empty!";
    $isEmailTrue = false;
  }else {
    $isEmailTrue = true;
    $errors["email"] = "";
  }

  if(empty($type)){
    $errors["type"] = "type is empty!";
    $isTypeTrue = false;
  }else if(preg_match("/[^0-9]/",$type)){
    $isTypeTrue = true;
    $errors["type"] = "";
  }else{
    $errors["type"] = "type is invalid!";
    $isTypeTrue = false;
  }

  if(empty($toppings)){
    $errors["toppings"] = "toppings are empty!";
    $isToppingsTrue = false;
  }else if(preg_match("/[a-zA-Z]+[,]*/",$toppings)){
    $isTypeTrue = true;
    $errors["toppings"] = "";
  }else{
    $errors["toppings"] = "toppings are invalid!";
    $isToppingsTrue = false;
  }

  



  if($isEmailTrue && $isToppingsTrue && $isTypeTrue){
    header('location: OrderRecieved.php');
  }
}


?>


<?php include 'header.php';?>

  <div class="container-md " style="height: 70vh;">
    <div class="row d-flex justify-content-center align-items-center" style="height: 100%;" >
      <div class="col-12 col-md-4">
        
        <div class="card text-center border shadow-0">
    
          <form action="index.php" method="post">

          <div class="card-body">
            <h5 class="card-title">ORDER A PIZZA</h5>
            <div class="form-outline m-3">
              <input type="email" id="form1" class="form-control" name="email" value="<?php echo $email  ?>"/>
              <label class="form-label" for="form1">Email</label>
            </div>
            <p class="m-0 p-0 text-danger"><?php  echo $errors["email"];?> </p>
            <div class="form-outline m-3">
              <input type="text" id="form1" class="form-control" name="type" value="<?php echo $type  ?>"/>
              <label class="form-label" for="form1">Pizza type</label>
            </div>
            <p class="m-0 p-0 text-danger"><?php  echo $errors["type"];?> </p>
            <div class="form-outline m-3">
              <textarea class="form-control" id="form1" cols="30" rows="2" name="toppings" ><?php echo $toppings  ?></textarea>
              <label class="form-label" for="form1">Toppins (Comma separated values)</label>
            </div>
            <p class="m-0 p-0 text-danger"><?php  echo $errors["toppings"];?> </p>
              <button class="btn btn-primary mx-2 mt-2"type="submit">Order a yummy pizza</button>
            
            
          </div>

        </form>
          <div class="card-footer text-muted">Free Delivery</div>
        </div>

      </div>
    </div>
  </div>

  
  <?php include 'footer.php';?>