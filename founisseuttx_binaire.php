<?php
set_time_limit(0);
$ascii = array("0","1");
$i =0;
$ressource = fopen('texte_binaire.txt', 'w+');
file_put_contents('exemple.txt', 'Ecriture dans un fichier');
for ($i = 1; $i <= 10000; $i++)
{
  file_put_contents('exemple.txt', "\n**NOUVEAU TEXTE**", FILE_APPEND)
$chif = rand(5, 15);
}



 ?>
