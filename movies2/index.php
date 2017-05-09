<?php

include("db.php");
include("db-functions.php");

$movies = findMovies();

$pageTitle = "Home";
?>

<?php include("top.php"); ?>

    <main class="posters-list">
        <?php foreach ($movies as $movie): ?>
            <a href="detail.php?id=<?= $movie['id'] ?>" title="<?= $movie['title'] ?>" class="poster">
                <img src="posters/<?= $movie['imdbId'] ?>.jpg" alt="<?= $movie['title'] ?>">
            </a>
        <?php endforeach ?>
    </main>

<?php include("bottom.php"); ?>