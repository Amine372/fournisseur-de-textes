<?php
  include("class.phpmailer.php");
  include("class.smtp.php");
  date_default_timezone_set("Europe/Paris");
  $mail = new PHPMailer();
  $body             = "Test de PHPMailer.";
  $mail->IsSMTP();
  $mail->SMTPAuth   = true;
  $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true)); // ignorer l'erreur de certificat.
  $mail->Host       = "smtp-in.orange.fr";
  $mail->Port       = 587;
  $mail->Username   = "nakhila@orange.fr";
  $mail->Password   = "Amine06..";
  $mail->From       = "nakhila@orange.fr"; //adresse d’envoi correspondant au login entré précédemment
  $mail->FromName   = "Amine"; // nom qui sera affiché
  $mail->Subject    = "voici l'objet"; // sujet
  $mail->AltBody    = "corps du message au format texte"; //Body au format texte
  $mail->WordWrap   = 50; // nombre de caractères pour le retour à la ligne automatique
  $mail->MsgHTML($body);
  $mail->AddReplyTo("nakhila@orange.fr","Amine");
  //$mail->AddAttachment("./examples/images/phpmailer.gif"); pièce jointe si besoin
  $mail->AddAddress("nakhila@orange.fr");
  $mail->IsHTML(true); // envoyer au format html, passer a false si en mode texte
  if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "Le message à bien été envoyé";
  }
?>
