<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>le resultat</title>
</head>
<body>

<?php include('header.html') ?>

	<?php

		$final=0;
		foreach ($_SESSION as $key => $value) {
			if (strtoupper($_POST['recherche'])===strtoupper($key)){
				$final=$value;
				break;
			}
		}
		if ($final===0) {
		echo "Le produit n'est pas dans la liste";
		}else{
			echo"Le prix est {$final}";
		}
	unset($key);
	unset($value);
	 ?>
	 
</body>
</html>
