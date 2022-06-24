<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="contact.css">
    <title>GEN-EXTREME</title>
</head>
<body>
    
<header>
    <nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <img src="logo.png" alt="logo" style="width: 40px ; height:40px">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" class="navcon" href="index.php" style="position: absolute; left:100px; top:10px" ><span class="fspans" >Home </span> </a>
            <a class="nav-item nav-link" class="navcon" href="contact.php" style="position: absolute; left:200px ; top:10px"> <span class="fspans" >Contact </span></a>   

            <img src="assets/GEN EXTREME.png" style="position:absolute; left:640px; top:12px; " >

            <a class="nav-item nav-link" class="navcon" href="SIGNup.php" style="position: absolute; left:1200px; top:10px;"><span class="fspans">SIGNUP/SIGNIN </span> </a>

            <img src="assets/cart-73-32.png" style="width:30px; height:30px ; position:absolute; left:1350px; top:10px;">
               

    </nav>
</header>


  <main>

<div id="setup">
    <img src="assets/deck.png" id="decck" style="height:500px; width:550px">
</div>

<div id="frmfrm">


    <div id="lil">

    
    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form    method="POST" action="contact.php">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="nomClient" class="form-control">
                        <label for="nomClient" >Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text"  name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->
            <div class="text-center text-md-left">
          <!-- <button name="send"> send</button> -->
          <button id="btn11" style="border:0px ; background-color: red ; width:100px; height:
    30px; border-radius: 10px; " name="send"> <span id="he">SEND</span>  </button>
          </div>
        </form>
<?php
 include "connection.php";

 if (isset($_POST['send'])) {


    $message = $_POST ['message'];
    $email = $_POST ["email"];
    $nomClient = $_POST ['nomClient'];
    $subject = $_POST ['subject'];
   

    $sql = "INSERT INTO support (`message`,`email`,`nomClient`,`subject`) VALUE ('$message','$email','$nomClient','$subject')";
    $querry = mysqli_query($conn , $sql);

    
    mysqli_close($conn);
    die();

 }
   
    
  

 ?>
        
     
    </div>
    </div>
    </div>

  </main>


  <footer style="width: 100% ; height: 20px ; background-color: black ; margin-top:45px">
        <H5 style="color: white ; font-size: 12px ; margin-left: 600px ; margin-top: 9px"> © 2022 GEN-EXTREME. All rights reserved </H5>
    </footer>
</body>
</html>