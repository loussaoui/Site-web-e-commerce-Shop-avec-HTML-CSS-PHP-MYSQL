<?php  session_start();  ?>
	<html>
	<head></head>
	<body>
	
	
<header class="site-navbar" role="banner" >
      <div class="site-navbar-top" style="background-color:powderblue;" >
        <div class="container" >
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Shop</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                <?php
                  if(isset($_SESSION['connect'])){				
					    echo '<li><h5><font color="blue"> '.$_SESSION['connect'].'     </font> </h5></li>  
                         <a href="deconnecter.php" ><button name="deconneter" style=" width:50px ; height:30px ; background-color:white ; " >  <img src="images/dec.png" width="15px"  height="18px" /> </button></a>';
				  
				  if(isset($_POST['deconneter'])){ 	session_destroy() ; }
				  
				  }
				  
				  else {
                  echo '<li><a href="Connection.php"><span class="icon icon-person"></span></a></li> ';
					  
				  }

					?>
					
				<li>
                    <a href="panier.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
					  
                      <?php if(isset($_SESSION['connect'])){	
					  				$basi = mysqli_connect ('127.0.0.1', 'root', '','gestionclients');

					  					$sql = 'SELECT * From commandes where username="'.$_SESSION['connect'].'" ';
                                        $resultas=mysqli_query ($basi,$sql);
			                         	$ligne=mysqli_fetch_array($resultas);
										$x=mysqli_num_rows ($resultas);
										
					  echo '<span class="count"> '.$x.' </span> ' ; 
					  } 

					  ?>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation" style='  border: 2px solid black; '>
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block" >
            <li>  <a href="index.php">Home</a><li>
            <li><a href="shop.php">Shop</a></li>
			<li><a href="Homme.php">Homme</a></li>
			<li><a href="Femme.php">Femme</a></li>
			<li><a href="Enfant.php">Enfant</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
	</body>
	</html>