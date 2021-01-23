		<h2>Registre IP</h2>

		<br><br>
		
	<?php

		$monfichier = fopen("registres/ip.txt", "a+"); // Ouverture du fichier ip.txt
			
			$ligne = fgets($monfichier) . "<br>"; // Mise en place de l'écriture des ip

			echo $ligne; // Ecriture des ip

		}

		fclose($monfichier);

	?>

	<?php

	if (isset($erreur)) {
		
		echo "<a>" . $erreur . "</a>"; // Ecriture de l'erreur (si il y en a une)
	}
	?>