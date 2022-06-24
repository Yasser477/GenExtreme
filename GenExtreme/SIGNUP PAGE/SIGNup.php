<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
    <title>GEN-EXTREME</title>
</head>
<body id="bd" style="background-color: black; background-position: center; background-attachment: fixed;">

    
    <header>
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
               
              
  </header>
    
  <main id="main">

    
    <div id="formDiv">

        <H3 id="registerhere"> REGISTER HERE </H3>

        <form method="post">
        <div id="indiv1">
                <input type="text" class="inputs1" name="nomClient" placeholder="Enter your name" >
                <input type="text" class="inputs1" name="prenomClient" placeholder="Enter your second name" >
                <input type="text" class="inputs1" name="adresse" placeholder="Enter your Adresse">  
        </div>
       
        <div id="indiv2">
                <input type="text"  class="inputs2" name="tel" placeholder="Enter your phone number">
                <input type="email"class="inputs2" name="email" placeholder="Enter your email">
                <input type="password" class="inputs2" name="motpass" placeholder="create a password" >
        </div>
        
        
        <button type="submit" name="submit"  id="register">  <span>REGISTER</span> </button>

        <a href="../LOGIN PAGE/Login.php" id="login"> ALREADY HAVE AN ACCOUNT ? </a>
        </form>
<?php
        include"connection.php";
        if (isset($_POST['submit'])) {

                  //data  info
                  $nomClient = $_POST['nomClient'];
                  $prenomClient = $_POST['prenomClient'];
                  $email = $_POST['email'];
                  $tel = $_POST['tel'];
                  $adress = $_POST['adresse'];
                  $motpass = $_POST['motpass'];
                  $idClient = $_POST['idClient'];

                 

                    //data info >> database >> client
                        $sql = "INSERT INTO client (`nomClient`,`prenomClient`, `adresse`, `tel`, `email`, `motPass` ) VALUES ('$nomClient','$prenomClient', '$adress','$tel','$email' , '$motpass')";
                        $query = mysqli_query($conn, $sql);
                      

                        // connection closed.
                        header('location: index.php');
                        mysqli_close($conn);
                        die();

                  }
          


?>


        <!-- <div id="indiv1">
                <input type="text" class="inputs1" name="nomClient" placeholder="Enter your name" >
                <input type="text" class="inputs1" name="prenomClient" placeholder="Enter your second name" >
                <input type="text" class="inputs1" name="adresse" placeholder="Enter your Adresse">  
        </div>
       
        <div id="indiv2">
                <input type="tel"  class="inputs2" name="tel" placeholder="Enter your phone number">
                <input type="email"class="inputs2" name="email" placeholder="Enter your email">
                <input type="password" class="inputs2" name="motpass" placeholder="creat a password" >
        </div>
        
        
        <button type="submit" name="submit"  id="register">  <span>REGISTER</span> </button>

        <a href="../LOGIN PAGE/Login.php" id="login"> ALREADY HAVE AN ACCOUNT ? </a>

        </form> -->
              
     </div>

   

            </main>

         
</body>
</html>