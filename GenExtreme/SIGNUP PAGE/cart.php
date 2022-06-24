<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="cart.css">
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    
    <title>Document</title>

</head>
<body>




<header>

   



<nav class="navbar navbar-expand-lg navbar-dark bg-black " ">
       
<img src="logo.png" alt="logo" style="width: 40px ; height:40px">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <a class="nav-item nav-link active" class="navcon" href="index.php" style="position: absolute; left:100px; top:10px" ><span class="fspans" >Home </span> </a>
    <a class="nav-item nav-link" class="navcon" href="contact.php" style="position: absolute; left:200px ; top:10px"> <span class="fspans" >Contact </span></a>   

    <img src="assets/GEN EXTREME.png" style="position:absolute; left:640px; top:12px; " >

    <a class="nav-item nav-link" class="navcon" href="SIGNup.php" style="position: absolute; left:1200px; top:10px;"><span class="fspans">  SIGNUP/SIGNIN </span> </a>
  <span class="fspans" style="position: absolute; left:1100px; top:21px;"><?php echo  $_SESSION["username"].$_SESSION["scname"];?> </span> 
  <a href="cart.php"> <img src="assets/cart-73-32.png" style="width:30px; height:30px ; position:absolute; left:1350px; top:10px;"></a> 
                        </nav>
</header>

<main>



<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
         
        </div>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="<?php echo  'gpu/'. $_SESSION ['image']; ?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"> <?php echo  $_SESSION ['name']; ?> </p> 
                <p style="position:absolute; left:750px; bottom: 70px; font-family:'ubuntu'; "> <?php echo $_SESSION ['prix'];  ?> DH</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <input id="form1" min="0" name="quantity" value="0" type="number"
                  class="form-control form-control-sm" />
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0"> </h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><img srv="assets/icons8-remove-48 1.png" class="fas fa-trash fa-lg" style="width:48px; height:48px">   </a>
              </div>
            </div>
          </div>
        </div>


        <!-- <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discound code</label>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div> -->

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</main>
    
</body>
</html>