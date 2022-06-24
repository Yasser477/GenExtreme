
<?php session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="buyNow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            <img src="assets/GEN EXTREME.png" style="position:absolute; left:640px; top:12px;">

            <img src="assets/cart-73-32.png" style="width:30px; height:30px ; position:absolute; left:1350px; top:10px;">

            <?php
          if ($_SESSION["username"]){
          ?>
            <span class="fspans" style="position: absolute; left:1100px; top:21px;"> <?php echo  $_SESSION["username"].$_SESSION["scname"];?> </span> 
            <?php
          }
          
          else{
            ?>

            <a class="nav-item nav-link" class="navcon" href="SIGNup.php" style="position: absolute; left:1200px; top:10px;"><span class="fspans">  SIGNUP/SIGNIN </span> </a>
            <?php
          }

?>
               
    </nav>
</header>


    <main>

    <?php
            include "connection.php";

            if (isset($_POST['conf'])) {
            $idClient = $_SESSION["idc"];
            $adressLiv = $_POST ['adressLiv'];
            $nomClient = $_POST ['nomClient'];
            $prenomClient = $_POST ["prenomClient"];
            $telClient = $_POST ['telClient'];

            
            

            $sql = "INSERT INTO commande (`idClient`, `adressLiv`,`nomClient`,`prenomClient`,`telClient`) VALUE ( '$idClient','$adressLiv','$nomClient','$prenomClient','$telClient')";
            $querry = mysqli_query($conn , $sql);
            header('location: index.php');
            mysqli_close($conn);
            die();

 }
   

 ?>





<div id="form">
            <h1 id="fill" >FILL THE FORM BELOW</h1>
            <form action="" method="POST" id="frm">

            <input type="text" class="inputs" id="name" name="nomClient" placeholder="enter your first name">
            
            <input type="text" class="inputs" id="secondname" name="prenomClient" placeholder="enter your second name">

            <input type="text" class="inputs" id="email" name="telClient" placeholder="enter your phone number">
            <input type="text" class="inputs" id="adress" name="adressLiv" placeholder="enter your adress">

            <div>
            
            <button id="btn11" style="border:0px ; background-color: red ; width:100px; height:
            30px; border-radius: 10px;   position: absolute; top:650px; left:250px;" name="conf" > BUY </button>
            </div>

            </form>
        </div>


    <?php 
    include 'connection.php';
    $id = $_GET["idpr"];
    if(isset($id)){
        $produit = "SELECT *
        FROM produit 
        WHERE idProduit='$id'";
        $result = mysqli_query($conn ,$produit);
    }
       
    
    while($row = mysqli_fetch_assoc($result) ){

    ?>

        




        

        <div id="seconddiv">
                <img src="<?php echo 'gpu/'.$row['imagep'];?>" style="width: 300px ; height: 300px; margin-left: 100px;"  alt="">
                <h3 style="margin-left: 100px ; justify-content: center; font-size: 22px; font-family: 'leagueFont' ;"><?php  echo $row["nomProduit"];?></h3>
                <h2 style=" margin-left:100px ; font-family: 'Ubuntu'; font-size: 20px; font-weight: bold"> PRIX : <?php  echo $row["prix"];?> DH</h2>


        </div>
        
        
        

        <?php }?>


        <div style="position: absolute; top:900px">
        <hr id="line1" style=" border:  solid; width: 545px; color: red; opacity: 100%; ">  <h1 id="dlv" >DELIVERY</h1>  <hr id="line2" style= " border:  solid; width: 545px; margin-left: 880px; margin-top: -20px ; color: red; opacity: 100%;">
        </div>




        <div>
            <img src="assets/amana 2.png" id="amana" >
            <img src="assets/barid bank 2.png" id="bb">
        </div>

        
    </main>
    

     <footer style="width: 100% ; height: 20px ; margin-top:100px ; background-color: black ; ">
        <H5 style="color: white ; font-size: 12px ; margin-left: 600px ; margin-top: 9px"> © 2022 GEN-EXTREME. All rights reserved </H5>
    </footer>
</body>
</html>