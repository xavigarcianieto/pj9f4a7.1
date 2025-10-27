<?php
	$pvp = 10;
	$IVA = 21;
	if (empty($_GET['ingr'])) {
		$pvp_public=$pvp*((100+$IVA)/100);
		echo "El preu de la pizza bàsica és $pvp_public € (IVA inclòs)<br>";		
	}
	else {
		$pvp_public=((100+$IVA)/100)*($pvp+count($_GET['ingr']));
		echo "Has demanat la pizza bàsica amb:<br> ";
		foreach ($_GET['ingr'] as $ingredient) {
			if ($ingredient) {
				echo "* $ingredient<br>";
			}
		}
		echo "El preu és $pvp_public € (IVA inclòs)<br>";
	
	}
?>
