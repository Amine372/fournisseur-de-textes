<?php
header('Location: www.facebook.fr');
// Nécessite qu'aucun affichage html n'est déjà été envoyé au navigateur
// example.php est la page cible de la redirection
// Redirection immédiate

header('Refresh: 5;URL=example.php');
// Nécessite qu'aucun affichage html n'est déjà été envoyé au navigateur
// 5 représente le temps en secondes avant redirection
// example.php est la page cible de la redirection
?>
