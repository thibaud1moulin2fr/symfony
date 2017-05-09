<?php
include("../vendor/autoload.php");
$token = utf8_encode(random_bytes(64));
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = "<html>";
$message .= "<h1>Modification de votre mot de passe :</h1>";
$message .= "<p>Veuillez initialiser votre nouveau mot de passe en cliquant sur le lien suivant :</p>";
$message .= '<a href="http://localhost:8080/movies2/change_password.php?var=' . $token . '">https://www.movies.com</a>';
$message .= "</html>";
mail("thibaud.moulin.fr@gmail.com", "Password reset", $message, $headers);

include("top.php");
?>
    <p>Un mail pour réinitialiser votre mot de passe vient de vous être envoyé, merci.</p>
<?php include("bottom.php"); ?>