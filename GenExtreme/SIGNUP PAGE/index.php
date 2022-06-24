<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
     <title>Gen Extreme</title>
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

           
            
         
          <a href="cart.php"> <img src="assets/cart-73-32.png" style="width:30px; height:30px ; position:absolute; left:1350px; top:10px;"></a> 
               
          <?php
          if ($_SESSION["username"]){
          ?>
            <span class="fspans" style="position: absolute; left:1200px; top:21px;"> <?php echo  $_SESSION["username"].$_SESSION["scname"];?> </span> 
            <?php
          }
          
          else{
            ?>

            <a class="nav-item nav-link" class="navcon" href="SIGNup.php" style="position: absolute; left:1200px; top:10px;"><span class="fspans">  SIGNUP/SIGNIN </span> </a>
            <?php
          }

          ?>
         
                             </div>
                          </div>

                         

                        



                        </nav>

                        <!-- <img src="header pic.png" alt="" style="width: 1600px ; margin-left: 40PX; margin-top: 20px;"> -->
                
    </header>

   <main id="main">

      <div id="" class="grid-container"  >

                      
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="categories/MSI-brand-banner.jpg" class="d-block w-100" alt="..." style="width: 100px ; height: 500px ;">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="categories/asus.jpg" class="d-block w-100" alt="..." style="width: 100px ; height: 500px ;">
                      </div>
                      <div class="carousel-item">
                        <img src="categories/kv.jpg" class="d-block w-100" alt="..." style="width: 100px ; height: 500px ;">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

          </div>

   
          <div class="cat" style="margin-top: 30px ;">
     <?php
    //  session_start();
    //   echo $_SESSION["id_user"];

      include 'connection.php';

      $categories = "select * from category ";
      $result = mysqli_query($conn ,$categories);

      while($row = mysqli_fetch_assoc($result) ){


      



     ?>

    



 <div class="hamodos">
  <a href="products.php?idCat=<?php echo $row ["idCat"] ?>">
   <img  src="<?php echo 'categories/'.$row['Image'];?>" > </a> <br>
  <p id="cname"> <?php echo $row['catNam']?> </p>
  </div>
  
  
  
  <?php }?>
</div>
        <div class="hr">
          <div id="line">

         
                        <hr id="line1" style="margin-top: 100px ; border:  solid; width: 600px; color: red; opacity: 100%; "> <span id="bra">NEWS</span> <hr id="line2" style="margin-top: 100px ; border:  solid; width: 640px; margin-left: 325px; color: red; opacity: 100%;">
                  </div>       
        </div>
       

      
        <div>
        <img src="categories/razer-barracuda.jpg" id="razer">

        <div class="razerDiv"> <br>

          <h3 class="rtitle">RAZER BARRACUDA X</h3> <br>
          <p class="razerp">Whether for PC or console at home, or mobile entertainment while on the go, the Razer Barracuda range is a line of versatile hybrid headsets built for audio in any environment.
                             Play everything from your favorite games to the latest albums with just the tap of a button, thanks to Razer SmartSwitch Dual Wireless that instantly toggles between high-speed connectivity for home use and Bluetooth convenience on your mobile devices.
                              No matter where life takes you, the Barracudas are always ready for play.
            </p>

            <a href="https://www.razer.com/gaming/headsets/razer-barracuda-x"><button id="btn1" > view more</button>    </a>   
        
        </div>
       </div>

        <div>
                <img src="categories/background.jpg" id="steel">

                <div style="width: 700px; height:120px; margin-bottom: 100px;">
                  <H3 class="rtitle" style="position: absolute; right:1100px; top: 1550px;"  >ARCTIS 9 WIRELESS ></H3>
                  <div style="position: absolute; top:1680px; ">
                       <ul style="font-family: leagueFont; text-align: justify; ">
                    <li>Lossless 2.4 GHz wireless for lag-free high fidelity gaming audio on PC, <br> PlayStation 5, and PlayStation 4</li>
                    <li>Simultaneous Bluetooth for calls, music, and VoIP chat while gaming</li>
                    <li>Signature Arctis sound to hear every detail for an audio advantage</li>
                    <li>20+ hour battery life for nonstop wireless usage</li>
                  </ul>
                  </div> 
                 <a href="https://fr.steelseries.com/gaming-headsets/arctis-9"><button id="btn2" > view more</button>    </a>            
               </div>
        </div>

         <div id="line2">
              <hr id="line1" style="margin-top: 100px ; border:  solid; width: 600px; color: red; opacity: 100%; "> <span id="give">GIVEAWAY</span> <hr id="line2" style="margin-top: 100px ; border:  solid; width: 600px; margin-left: 315px; color: red; opacity: 100%;">
         </div>   

          <div>

               
          <img src="categories/glory.jpg" id="glory" alt=""> <br>

          <p id="stglory">Video games are amazing. And there's <br>
            no limit to the wonder they can inspire. Our mission is to help every gamer <br>
              push the limits of the extraordinary and feel like a star.
            </p>

            <a href="https://fr.steelseries.com/about"><button id="btn3" > view more</button>    </a>   

          </div>

</main>

<footer style="width: 100% ; height: 300px; background-color: black; position: relative; top: 400px;">

<img src="logo.png" id="lgft2"   alt="">
<img src="assets/GEN EXTREME.png" id="lgft" alt="">


</footer>

   <script src="bootstrap.bundle.min.js"></script>
   <script src="bootstrap.bundle.js"></script>
   
</body>

</html>