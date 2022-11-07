<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Recaputulatif</title>
</head>
<body>
	<?php include('header.html') ?>
	<h1>En gros vous vouler ca</h1>
	<?php 


	
	$_SESSION=[
		$_POST['produit1']=>(int)$_POST['prix1'],
		$_POST['produit2']=>(int)$_POST['prix2'],
		$_POST['produit3']=>(int)$_POST['prix3'],
		$_POST['produit4']=>(int)$_POST['prix4'],
		$_POST['produit5']=>(int)$_POST['prix5'],
		$_POST['produit6']=>(int)$_POST['prix6'],
		$_POST['produit7']=>(int)$_POST['prix7'],
		$_POST['produit8']=>(int)$_POST['prix8'],
		$_POST['produit9']=>(int)$_POST['prix9'],
		$_POST['produit10']=>(int)$_POST['prix10'],
		]

		
	 ?>
	 <table>
	 	<tr>
	 		<th>Produit</th>
	 		<th>Prix</th>
	 	</tr>
	 	<?php 
	 	foreach ($_SESSION as $key => $value) {
	 		echo "<tr>";
	 		echo "<td>".$key."</td>";
	 		echo "<td>".$value."</td>";
	 		echo "</td>";
	 	}
	 	unset($key);
	 	unset($value);
	 	 ?>
	 </table>

	 
	 
	 <form method="POST" action="final.php">
	 	<label for="recherche">Chercher le prix d'un produit</label>
	 	<input type="texte" name="recherche">
	 	<input type="submit" value="Envoyer">
	 </form>
	
</body>
</html>