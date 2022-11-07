
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Le formulaires</title>
</head>
<body>
	<?php include('header.html') ?>
	<form action="one.php" method="POST">
		<label for="produit1">Produit1 &nbsp</label>
		<input type="texte" name="produit1" placeholder="entrer le nom du produit" required="required">
		<label for="prix1">Prix1&nbsp</label>
		<input type="number" name="prix1" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix1']?>">
		<br><br>



		<label for="produit2">Produit2&nbsp</label>
		<input type="texte" name="produit2" placeholder="entrer le nom du produit"  required="required">
		<label for="prix2">Prix2&nbsp</label>
		<input type="number" name="prix2" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix2']?>">
		<br><br>


		<label for="produit3">Produit3 &nbsp</label>
		<input type="texte" name="produit3" placeholder="entrer le nom du produit"  required="required">
		<label for="prix3">Prix3 &nbsp</label>
		<input type="number" name="prix3" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix3']?>">
		<br><br>


		<label for="produit4">Produit4&nbsp</label>
		<input type="texte" name="produit4" placeholder="entrer le nom du produit"  required="required">
		<label for="prix4">Prix4&nbsp</label>
		<input type="number" name="prix4" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix4']?>">
		<br><br>


		<label for="produit5">Produit5&nbsp</label>
		<input type="texte" name="produit5" placeholder="entrer le nom du produit"  required="required">
		<label for="prix5">Prix5 &nbsp</label>
		<input type="number" name="prix5" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix5']?>">
		<br><br>


		<label for="produit6">Produit6&nbsp</label>
		<input type="texte" name="produit6" placeholder="entrer le nom du produit"  required="required">
		<label for="prix6">Prix6&nbsp</label>
		<input type="number" name="prix6" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix6']?>">
		<br><br>


		<label for="produit7">Produit7&nbsp</label>
		<input type="texte" name="produit7" placeholder="entrer le nom du produit"  required="required">
		<label for="prix7">Prix7 &nbsp</label>
		<input type="number" name="prix7" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix7']?>">
		<br><br>


		<label for="produit8">Produit8&nbsp</label>
		<input type="texte" name="produit8" placeholder="entrer le nom du produit"  required="required">
		<label for="prix8">Prix8&nbsp</label>
		<input type="number" name="prix8" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix8']?>">
		<br><br>


		<label for="produit9">Produit9&nbsp</label>
		<input type="texte" name="produit9" placeholder="entrer le nom du produit"  required="required">
		<label for="prix9">Prix9&nbsp</label>
		<input type="number" name="prix9" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix9']?>">
		<br><br>


		<label for="produit10">Produit10</label>
		<input type="texte" name="produit10" placeholder="entrer le nom du produit"  required="required">
		<label for="prix10">Prix10</label>
		<input type="number" name="prix10" placeholder="entrer le prix"  required="required" value="<?php(int)$_POST['prix10']?>">
		<br><br>
		<input type="submit" value="soumettre">
		<input type="reset" value="recommencer">

	</form>

</body>
</html>