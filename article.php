
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
 Ajouter un Produit</a></li>
	<li><a href="client.php"><i class="fa fa-users" aria-hidden="true"></i>
 Les clients</a></li>
	<li><a href="comm.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
 Les commandes</a></li>
	<form class="sed" method="post" action="admin.php"><input type="submit" name="dec" value="Se déconnecter" class="btn prymary-btn">
</form>
</ul>
</div>
<div class="col-md-8" style="width:500px;">
	<h1>Ajouter Article :</h1><br><br>
	<form style="width:80%;" method="post" enctype="multipart/form-data">
		<div div="form-group">
	<label class="control-label">Nom d'article :</label><input type="text" name="title" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Catégorie :</label><select class="form-control" name="cat">
		<option>women</option>
		<option>man</option>
		<option>Enfant</option>
	</select>
	</div>
	<div div="form-group">
	<label class="control-label">Image d'article :</label><input type="text" name="image" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Prix d'article :</label><input type="text" name="prix" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Quantite :</label><textarea class="form-control" name="des" required></textarea>
	</div><br>
	<div div="form-group">
	<input type="submit" name="new" value="Ajouter" class="btn btn-primary form-control">
	</div>
	</form>
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
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root',	'','gestionclients');
return	$basi; }
if (isset($_POST['new'])) {
	$lien=connectMaBasi();
	$title=$_POST['title'];
	$cat=$_POST['cat'];
	$des=$_POST['des'];
	$prix=$_POST['prix'];
    $image=$_POST['image'];
//$imageTemp=$_FILES['image']['tmp_name'];
//move_uploaded_file($imageTemp,"images/".$image."");
$sql='INSERT INTO produits (nom,src,prix,quantite,categorie) values ("'.$title.'","'.$image.'","'.$prix.'","'.$des.'","'.$cat.'")  ';
$run=mysqli_query($lien,$sql);
if ($run) {
	echo "<script>alert('Larticle a été bien ajouter !')</script>";
}
else{
	echo "<script>alert('Erreur')</script>";
}
}
?>