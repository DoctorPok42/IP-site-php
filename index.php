<?php
session_start();

function get_ip() {

	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}
	// Création des variables de l'ip, date et l'heure
$ip = get_ip();

$date = date("d-m-Y");

$heure = date("H:i");

$monfichier = fopen('registres/ip.txt', 'a+'); // Ouverture du fichier ip.txt

$registre = "";

for ($i=0; $i < 200; $i++) { 
	
	$registre = $registre . fgets($monfichier);
}

$ip_text = $ip . " le " . $date . " à " . $heure . ";\r\n" . $registre;

ftruncate($monfichier, 0);

fputs($monfichier, $ip_text); // Enregistrement de l'ip avec la date et l'heure dans le bon fichier
 
fclose($monfichier);

header('VOTRE PAGE D\'ACCUEIL'); // Redirection vers la page d'accueil
?>