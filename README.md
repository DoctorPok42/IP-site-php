# IP-site-php

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0fd5b7bca5c443f7aabd3e72810431bc)](https://app.codacy.com/gh/DoctorPok42/IP-site-php?utm_source=github.com&utm_medium=referral&utm_content=DoctorPok42/IP-site-php&utm_campaign=Badge_Grade_Settings)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0fd5b7bca5c443f7aabd3e72810431bc)](https://app.codacy.com/gh/DoctorPok42/IP-site-php?utm_source=github.com&utm_medium=referral&utm_content=DoctorPok42/IP-site-php&utm_campaign=Badge_Grade_Settings)

Récupérer l'ip d'un visiteur sur votre site, l'enregistrer puis la traiter

Pour cela vous avez besoin des 2 fichiers (`index.php` et `ip.php`)

Le fichier index.php est le premier c'est lui qui va capturer l'ip du visiteur pour ensuite la stocké dans le fichier `ip.txt` qui se trouve dans le dossier `registres` avec la date et l'heure. Et ensuite redirigé le visteur vers votre page d'accueil.

Ensuite le fichier ip.php va lire les ip qui se trouvent dans le fichier ip.txt pour les afficher sur la page web.

<hr>
Pour ce faire vous devez télécharger les 2 fichier sur votre serveur et modifier là où vous voulez stocker les ip :

- modifiez la ligne **26** du fichier index
- modifiez la ligne **7** du fichier ip
 
 Pour finir vous devez modifier la ligne **43** du fichier index vers la page d'accueil de votre site.
