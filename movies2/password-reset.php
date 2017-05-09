<?php
//password-reset.php

include("db.php");
include("vendor/autoload.php");

$pageTitle = "Password reset";

//est-ce qu'on a bien les 2 paramètres d'URL requis pour identifier le user ?
if (!empty($_GET['email']) && !empty($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    //recherche si cet user existe bel et bien en bdd, en fonction de l'email de l'URL
    $sql = "SELECT * FROM users 
				WHERE email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $foundUser = $stmt->fetch();

    //si l'utilisateur a été trouvé...
    if ($foundUser) {
        //si le token de l'URL est bien le même que celui du user...
        if ($token == $foundUser['token']) {
            //si le formulaire de changement de pw a été soumis...
            if (!empty($_POST['password'])) {
                $newPassword = $_POST['password'];

                //met à jour le pw dans la bdd
                //on en profite pour supprimer le token, afin qu'il ne soit plus réutilisable
                $sql = "UPDATE users SET password = :newPassword, token = NULL 
							WHERE id = :userId";
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(":newPassword", password_hash($newPassword, PASSWORD_DEFAULT));
                $stmt->bindValue(":userId", $foundUser['id']);
                $stmt->execute();

                //redirige à l'accueil...
                header("Location: index.php");
                die();
            }
        }
    }
}

?>
<?php include("top.php"); ?>

    <main>
        <h1>Reset your password here : </h1>
        <form method="POST">
            <div>
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="" value="">
            </div>
            <div>
                <button type="submit">Go !</button>
            </div>
        </form>
    </main>

<?php include("bottom.php"); ?>