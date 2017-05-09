<?php

include("db.php");
include("db-functions.php");

//récupère le paramètre d'URL nommé "id"
$id = $_GET['id'];

$movie = findMovieById($id);

$pageTitle = $movie['title'];
?>

<?php include("top.php"); ?>

    <main>
        <a href="detail.php?id=<?= $movie['id'] ?>" title="<?= $movie['title'] ?>" class="poster">
            <img src="posters/<?= $movie['imdbId'] ?>.jpg" alt="<?= $movie['title'] ?>">
        </a>

        <p><?= $movie['year'] ?></p>
        <p><?= $movie['cast'] ?></p>
        <p><?= $movie['rating'] ?></p>
    </main>

<?php include("bottom.php"); ?>