<?php
// Stock la page du site dans une variable
$page1 = file_get_contents("https://openclassrooms.com/forum/sujet/recuperer-une-chaine-de-caractere-dans-un-site");
// Cherche une chaine de caractere precis
$res = strstr($page1, "Comment se connecte-t-on à la base de données en PHP");
//comptabilise le nombre de caractere dans $res
$nbCaractere = strlen($res);
// Cherche une chaine de caractere precis dans $res
$res2 = strstr($res, "Quel moyen choisir parmi tous ceux-là");
//comptabilise le nombre de caractere dans $res2
$nbCaractere2 = strlen($res2);
//Calcul le nombre de charactere dans le paragraphe
$nbDif = ($nbCaractere - $nbCaractere2);
//Coupe ma chaine de caractere $res afin d'obtenir mon paragraphe
$paragraphe = substr($res, 0, $nbDif);

// affiche la variable $res
echo $nbCaractere . '<br />';
echo $nbCaractere2 . '<br />';
echo 'Le nombre de caractere de difference est de '. $nbDif .' dans les chaines.';
echo $paragraphe . '<br />';
?>
