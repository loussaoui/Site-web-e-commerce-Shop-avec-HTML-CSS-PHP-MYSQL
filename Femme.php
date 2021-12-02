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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop </h2></div>
                <div class="d-flex">
                 
                </div>
              </div>
            </div>
            <div class="row mb-5">

             
			  
                <?php
				
				$basi = mysqli_connect ('127.0.0.1', 'root', '','gestionclients');
				
				if(isset($_POST['Valider'])){
					$sql = 'SELECT * From produits  WHERE  prix>"'.$_POST['min'].'" and prix<"'.$_POST['max'].'" ';
				}
				if(isset($_POST['TrierN'])){
					$sql = "SELECT * From produits WHERE categorie='women' ORDER BY nom ";
				}
				if(isset($_POST['TrierP'])){
					$sql = " SELECT * FROM produits WHERE categorie='women' ORDER BY prix  ";
				}
				
			
				
				else {$sql = "SELECT * FROM produits WHERE categorie='women'  "; }
				
				
				$resultas=mysqli_query ($basi,$sql);
					

				while($ligne=mysqli_fetch_array($resultas)){
				echo '
				 <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
				<div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?s='.$ligne[0].' " ><img src='.$ligne[1].' alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html">'.$ligne[0].'</a></h3>
                    <p class="mb-0">Finding perfect t-shirt</p>
                    <p class="text-primary font-weight-bold">'.$ligne[2].'$</p>
				 </div>
				 </div>
				</div>					 ';}
               
				?>
				


            </div>
           
          </div>


            <div class="border p-4 rounded mb-4" style =" text-align:center ; ">
              <div class="mb-4">
			  <form method="post" action="Femme.php" >
			  <table>
               <tr> <td> Max :</td><td> <input type="text" name="max" style = "width:100px ;"><br> </td></tr>
			   <tr>	<td> Min :</td><td> <input type="text" name="min" style = "width:100px ;"><br> </td></tr> 
			   
              </table><br><br>
              <input type='submit' name="Valider" value="Chercher" style="width:150px ;  border-radius: 25px;  background: #73AD21; " ><br><br> 			 
             <h4>Trier Par :</h4><br>
			 <input type='submit' name="TrierP" value="Trier Par prix" style="width:120px ;  border-radius: 25px;  background:red; " > <br>
         	 <input type='submit' name="TrierN" value="Trier Par Nom" style="width:120px ;  border-radius: 25px;  background: red; " > <br><br>
			

			  </form>
					  </div>
			
			
            </div>
          </div>
        </div>

        
        
      </div>
    </div>

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min1.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main1.js"></script>
    
  </body>
</html>