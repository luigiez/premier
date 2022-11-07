<!DOCTYPE html>
<html>
<head>
	<title>superieur_a_500</title>
</head>
<body>

			<?php 
				$tab=[
					$_POST['produit1']=>$_POST['prix1'],
					$_POST['produit2']=>$_POST['prix2'],
					$_POST['produit3']=>$_POST['prix3'],
					$_POST['produit4']=>$_POST['prix4'],
					$_POST['produit5']=>$_POST['prix5'],
					$_POST['produit6']=>$_POST['prix6'],
					$_POST['produit7']=>$_POST['prix7'],
					$_POST['produit8']=>$_POST['prix8'],
					$_POST['produit9']=>$_POST['prix9'],
					$_POST['produit10']=>$_POST['prix10']
				];
				echo "<h1>Les produits donc le prix est superieur a 500<h1>";
				foreach ($tab as $produit => ($value>500) {
					print_r($produit);

				}

			 ?>
</body>
</html>