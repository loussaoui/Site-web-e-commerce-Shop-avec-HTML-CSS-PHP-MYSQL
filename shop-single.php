<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php   include('header.php') ;
   ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
        </div>
      </div>
    </div>  
<form method='post' >
<?php

				$basi = mysqli_connect ('127.0.0.1', 'root', '','gestionclients');
                 $sql = 'SELECT * From produits where nom="'.$_GET[s].'" ' ;
	
				$resultas=mysqli_query ($basi,$sql);
				$ligne=mysqli_fetch_array($resultas);


echo ' 
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src='.$ligne[1].' alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black" name="nom" >'.$ligne[0].'</h2><br>
            <p><strong class="text-primary h4">'.$ligne[2].'$ </strong></p>
            <div class="mb-1 d-flex">
              
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" name="quantite" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><button class="buy-now btn btn-sm btn-primary" name="commander">Ajouter La Commande </button></p>

          </div>
        </div>
      </div>
    </div> ';
	
	
	
	?>
</form>

          
        </div>
      </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
 <?php  
   if(isset($_POST['commander'])){
	   if(isset($_SESSION['connect'])){
	    $sql = 'INSERT INTO `commandes` (`username`, `nomproduit`, `quantite`) VALUES ("'.$_SESSION['connect'].'","'.$ligne[0].'","'.$_POST['quantite'].'"); ';
						$resultas=mysqli_query ($basi,$sql);

	   echo " <script> alert(' Commande bien fait ') </script>" ; }
	   
	   else {
		   
		  echo " <script> alert(' Il doit d se connecter ') </script>" ; }
	   }
				
        ?>