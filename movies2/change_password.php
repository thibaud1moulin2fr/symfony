<?php
/**
 * Created by PhpStorm.
 * User: tmoulin2016
 * Date: 26/04/2017
 * Time: 14:28
 */
include("db.php");
if (!empty($_POST)) {
    $sql = "select id from users where mail = :mail and token = :token;";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(":mail", $_GET["mail"]);
    $stmt->bindValue(":token", $_GET["token"]);
    $stmt->execute();
    $id = $stmt->fetch();

    if (!empty($login)) {
        $sql = "update users set password = :password where id = :id;";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":password", $_POST["password"]);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $done = $stmt->fetch();
    }
}

include("top.php");
?>
<form method="post">
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="">
    </div>
    <div>
        <label for="password_bis">Retype password</label>
        <input type="password" name="password" id="password_bis" placeholder="">
    </div>
    <div>
        <input type="submit" name="Send"/>
    </div>
</form>
<?php include("bottom.php"); ?>
