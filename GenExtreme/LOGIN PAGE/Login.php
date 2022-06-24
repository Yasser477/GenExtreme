<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/login.css">
    <link rel="stylesheet" href="login/bootstrap.min.css">
    <title>GenExtreme</title>
</head>
<body id="bd" style="background-color: black;">

  
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <img src="LOGIN/logo.png" alt="logo" style="width: 40px ; height:40px">

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


  
            <div id="fromDiv">
      <?php
      session_start();
            include '../SIGNUP PAGE/connection.php';
    if(isset($_POST['submit'])){
      $email = htmlspecialchars($_POST['email']);
      $pwd =  htmlspecialchars($_POST['motpass']);
      //validation
      $valid = 0;
          //email validation
          $checkEmail = mysqli_query($conn, "SELECT * from client WHERE email = '$email' AND motpass = '$pwd'");
          $result = $checkEmail->fetch_assoc();
     
          if (mysqli_num_rows($checkEmail) == 0) {
            $valid++;
          }

          //password validation
          
          if($valid != 0){
            echo  "<p>wrong email or password</p>";
          }else{
            $_SESSION["idc"]  = $result["idClient"];
            $_SESSION["username"] = $result["nomClient"];
            $_SESSION["scname"] = $result["prenomClient"];


            header( 'location: ../SIGNUP PAGE/index.php');
           exit(); 
          }
        }
?>
            <form method="POST"> 


                <img src="assets/" style="width: 100px ; margin-left:195px;" alt="">
                <input type="email" id="inpE" class="inputs" name="email" placeholder="Enter your email">
                <input type="password" id="inpP" class="inputs" name="motpass" placeholder="Enter your password">

                         <button id="btn" name="submit" type="submit" value="login" > LOGIN </button>

                         <a href="../SIGNUP PAGE/SIGNup.php" id="signUp">REGISTER HERE</a>
            </div>

            </form> 

    



</main>

</body>
</html>