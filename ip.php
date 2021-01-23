		<h2>Registre IP</h2>

		<br><br>
		
	<?php

		$fichier = fopen("registres/ip.txt", "a+"); // Ouverture du fichier ip.txt

		for ($i=0; $i < $nombre_ligne_registre; $i++) { 
			
			$ligne = fgets($fichier) . "<br>"; // Mise en place de l'écriture des ip

			echo $ligne; // Ecriture des ip

		}

		fclose($fichier);

	?>

	<?php

	if (isset($erreur)) {
		
		echo "<a>" . $erreur . "</a>"; // Ecriture de l'erreur (si il y en a une)
	}
	?>