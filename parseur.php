<?php
$url_a_parser = "http://mon_login:mon_mot_de_passe@www.le-site-a-parser.aspx?page_accessible_via_abonnement.aspx";
$url_fp = @file_get_contents($url_a_parser);
echo "$url_fp";

 ?>
