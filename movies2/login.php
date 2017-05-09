<?php
include("db.php");
$pageTitle = "Login";

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from users where email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $foundUser = $stmt->fetch();
    $errors = [];
    if (!$foundUser) {
        $errors[] = "Bad creditentials";
    } else {
        if (password_verify($password, $foundUser["password"])) {
            echo("Connected");
        } else {
            $errors[] = "Bad creditentials";
        }
    }
}
if (isset($errors)) {
    var_dump($errors);
}
include("top.php");
?>

<main>
    <h1>Login</h1>
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

<?php
include("bottom.php");
?>
