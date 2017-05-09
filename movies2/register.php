<?php

include("db.php");

//on déclare les variables vides ici, pour s'assurer qu'elles existent toujours
//évite des erreurs plus bas dans la vue
$username = "";
$email = "";
$password = "";

//formulaire d'inscription soumis ?
if (!empty($_POST)) {
    //récupère et filtre les données
    $username = trim(strip_tags($_POST['username']));
    $email = trim(strip_tags($_POST['email']));
    $password = trim(strip_tags($_POST['password']));

    /***** VALIDATIONS ICI ******/
    $errors = [];
    if (empty($username)) {
        $errors["username"] = "Veuillez renseigner votre pseudo !";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide !";
    }
    if (empty($email)) {
        $errors["email"] = "Veuillez renseigner votre email !";
    }
    if (empty($password)) {
        $errors["password"] = "Veuillez renseigner votre mot de passe !";
    }

    if (empty($errors)) {
        //requête d'insertion
        $sql = "INSERT INTO users (username, email, password, date) 
					VALUES (:username, :email, :password, NOW())";

        $stmt = $dbh->prepare($sql);

        //remplace les paramètres nommés de la requête, par les données du formulaire
        $stmt->bindValue(":username", $username);
        $stmt->bindValue(":email", $email);

        //on hash le mot de passe avant de le sauvegarder en bdd
        //on oublie le mdp en clair à partir d'ici...
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindValue(":password", $hashed);

        $stmt->execute();
    }
}

$pageTitle = "Register";
?>

<?php include("top.php"); ?>

    <main>
        <h1>Register !</h1>
        <form method="POST">
            <div>
                <label for="username">username</label>
                <input type="text" name="username" id="username" placeholder="" value="<?= $username ?>">
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email" placeholder="" value="<?= $email ?>">
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="" value="<?= $password ?>">
            </div>
            <div>
                <?php
                if (!empty($errors)) {
                    echo '<ul class="errors">';
                    foreach ($errors as $field => $message) {
                        echo '<li>' . $message . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
                <button type="submit">Go !</button>
            </div>
        </form>
    </main>

<?php include("bottom.php"); ?>