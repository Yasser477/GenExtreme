<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="products.css">
    <title>GEN-EXTREME</title>

</head>
<body>
    <?php
    
    include 'connection.php';
    $idCat = $_GET["idCat"];
    if(isset($idCat)){
        $produit = "SELECT *
        FROM produit INNER JOIN category on produit.idCat=category.idCat
        WHERE category.idCat='$idCat'";
        $result = mysqli_query($conn ,$produit);
    }
   
    ?>
  
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
            
    </header>
    

    <main>


        <div  id="card" style="display: flex !important; justify-content:space-between !important; flex-wrap:wrap; margin-top:100px; ">

              <?php
                            while($row = mysqli_fetch_assoc($result)):
                            ?>
                                      
        

                                <div class="card" style="width: 250px;">
                                  <img src="<?php echo "gpu/". $row["imagep"]; ?>" class="card-img-top" alt="...">
                                 <div class="card-body">
                                  <p class="card-text"> <?php echo $row ["nomProduit"]; ?></p>
                                  <p class="card-text"> <?php echo $row ["prix"]; ?> DH</p>
                                  <a href="Pdetails.php?idpr=<?php echo $row ["idProduit"]?>"> <button id="buybtn" > BUY </button></a> 
                                  
                               </div>
                        </div>
                            <?php 
                            endwhile
                            ?>
        </div>

    
         

    </main>
    
</body>
</html>