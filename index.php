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
  <body style="background-color:powderblue;">
  
  <div class="site-wrap"  >
   
   <?php   include('header.php') ;
   ?>
   
    <div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end"  >
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0"  style = ' border: 2px solid black;  ' >
            <h1 class="mb-2"  style = ' text-align:center ;' >Welcome In The Shop</h1>
            <div class="intro-text text-center text-md-left">
              <p>
			  <br><br>
			  <?php
                  if(isset($_SESSION['connect'])){				
						echo ' <h1 style = " text-align:center ;"  ><font color="red">  Bonjour  '.$_SESSION['connect'].' </font>  </h1>';
				  }
				  
				  else {
                  echo '           <p style="text-align:center">     <a href="Connection.php" class="btn btn-sm btn-primary">Connecter Now</a></p>';
					  
				  }

					?>
              </p>
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
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main1.js"></script>
    
  </body>
</html>