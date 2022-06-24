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
    <link rel="stylesheet" href="Pdetails.css">
    <title>Document</title>
</head>
<body>
    
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
            <span class="fspans" style="position: absolute; left:1250px; top:14px; color: white; "> <?php echo  $_SESSION["username"].$_SESSION["scname"];?> </span> 
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

    <?php
   
    include 'connection.php';
    $id = $_GET["idpr"];
    if(isset($id)){
        $produit = "SELECT *
        FROM produit 
        WHERE idProduit='$id'  ";
        $result = mysqli_query($conn ,$produit);

       

    }
       
    
    while($row = mysqli_fetch_assoc($result) ){
    $_SESSION ['image'] = $row ['imagep'] ;
    $_SESSION ['name'] = $row ['nomProduit'];
    $_SESSION ['prix'] = $row ['prix'];




    ?>




    <div id="divimage">
          <img src="<?php echo 'gpu/'.  $_SESSION ['image'] ;?>" id="image" >

    </div>

    <div id="title">
        <h2><?php  echo $row["nomProduit"];?></h2>
    </div>

    <DIV id="paradiv">
        <p >
        <?php  echo $row["desProduit"];?>
        </p>
    </DIV>
<br>
    <DIV id="prixdiv">
        <p >
      PRIX :  <?php  echo $row["prix"];?> DH
        </p>
    </DIV>
    

    <div>


  <a href="cart.php">  <button style="border:0px ; background-color: red ; 
        width:100px; height: 30px; border-radius: 10px;
         position: absolute; top:550px; left:650px " name="add_to_cart" > add to cart </button></a>

   <a href="buyNow.php?idpr=<?php echo $row ["idProduit"]?>"> <button style="border:0px ; background-color: red ; width:100px; height:
    30px; border-radius: 10px; position: absolute; top:550px; left:770px ">
            buy now
         </button> </a> 

    </div>
          


<?php } ?>



<hr id="line1" style="margin-top: 800px ; border:  solid; width: 550px; color: red; opacity: 100%; ">  <h1 id="bs">BEST SELLER</h1>  <hr id="line2" style="margin-top: -20px ; border:  solid; width: 550px; margin-left: 875px; color: red; opacity: 100%;">




      <div id="diva">

    

<?php
    //  session_start();
    //   echo $_SESSION["id_user"];

      include 'connection.php';

      $categories = "select * from produit order by RAND() LIMIT 4";
      $result = mysqli_query($conn ,$categories);

      while($row = mysqli_fetch_assoc($result) ){


      



     ?>
<div style="display: flex; margin-top:100px" >
      

        <div id="cardida" >
        <a href="Pdetails.php?idpr=<?php echo $row ["idProduit"]?>">  <img src="<?php echo 'gpu/'.$row['imagep'];?>" style="width: 200px; height:200px; text-align: center; margin-left:60px;" alt=""></a>
            
            <H4 id="nameee" ><?php echo $row['nomProduit']?> </H4>
            <h6 id="priceee" ><?php echo $row['prix']?> DH </h6>

            <!-- <button style=" margin-left: 150px ;"> VIEW </button> -->
        </div>

        

</div>


<?php } ?>

</div>

    </main>


    <footer style="width: 100% ; height: 20px ; margin-top:100px ; background-color: black ; ">
        <H5 style="color: white ; font-size: 12px ; margin-left: 600px ; margin-top: 9px"> © 2022 GEN-EXTREME. All rights reserved </H5>
    </footer>
</body>
</html>




