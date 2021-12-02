
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-md-4">
<ul class="admenu">
	<li><a href="articleC.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
 Les Produits</a></li>
	<li><a href="article.php"><i class="fa fa-plus" aria-hidden="true"></i>
 Ajouter un produit</a></li>
	<li><a href="client.php"><i class="fa fa-users" aria-hidden="true"></i>
 Les clients</a></li>
	<li><a href="comm.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
 Les commandes</a></li>
	<form class="sed" method="post" action="admin.php"><input type="submit" name="dec" value="Se déconnecter" class="btn prymary-btn">
</form>
</ul>
</div>
<div class="col-md-8" style="width:500px;">
	<h1>Gestion produits :</h1><br><br>
	<div  style=" margin-left:100px; text-align:center; ">
	<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','gestionclients');
return	$basi; }
	$lien=connectMaBasi();
	
$sql="select * from clients ";
$run=mysqli_query($lien,$sql);

					 echo ' <table style=" width:500px ; text-align:center;" border=2 >
<tr><td>name</td><td>email </td><td>Username </td><td>Password</td></tr>					 ' ;
					 
					 while($ligne=mysqli_fetch_array($run)){
						 echo "<tr>" ;
						 
							 echo '<td> '.$ligne[0].'</td><td> '.$ligne[1].'</td><td> '.$ligne[2].'</td><td> '.$ligne[3].'</td>' ;
				
		                  echo "</tr>" ;				 
					 }
					 echo "</table><br>" ;





?>
	<form style="width:80%;" method="post" enctype="multipart/form-data">
          <input type="text"  name="nom"  />  <input type="submit"   name="suprimer" value="suprimer"  />   
	
	</form>
	</div>
</div>
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>


<?php 
if(isset($_POST['suprimer'])){

	$lien=connectMaBasi();
	
	$sql = 'DELETE FROM `clients` WHERE username="'.$_POST['nom'].'" ' ;
     $run=mysqli_query($lien,$sql);
	
	echo 'le produits est suprimer ';
	
}


?>
