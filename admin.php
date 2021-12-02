<?php

if(isset($_POST['connecter'])){
	
	if($_POST['user']=='asmae' && $_POST['pass']=='asmae' ){  echo "succ ";header('location:adminAcceuil.php') ; }
	else { echo 'fault' ;}
	
	
}

?>
<html>
<head></head>
<body>

<div style=" width: 98%; text-align:center; border:1px solid #DEB887 ; padding:5px;">
<form  method="post" action="admin.php" >
Name : <br>
<input type="text" name="user"  /> <br><br>
Pass : <br>
<input type="text" name="pass"  /> <br><br>
<input type="submit"   name="connecter"  value="connecter" style="width:120px ;height:30px;  border-radius: 25px;  background: #DEB887 ; "  />
</form>
</div>




</body>