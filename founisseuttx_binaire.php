<?php
set_time_limit(0);
$ascii = array("0","1");
$i =0;
$ressource = fopen('texte_binaire.txt', 'w+');
file_put_contents('texte_binaire.txt', 'Voici le texte');
file_put_contents('texte_binaire.txt', "\n", FILE_APPEND);
for ($i = 1; $i <= 10; $i++)
{
  $chif = rand(0, 1);
  file_put_contents('texte_binaire.txt', $chif, FILE_APPEND);
}



 ?>
