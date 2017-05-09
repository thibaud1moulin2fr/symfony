<?php

function findMovies($numMovies = 30)
{
    global $dbh;

    $sql = "SELECT id, title, imdbId 
			FROM movies 
			LIMIT $numMovies";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $movies = $stmt->fetchAll();
    return $movies;
}

function findMovieById($id)
{
    global $dbh;

    //on fait une requête pour récupérer le film en fct de son id
    $sql = "SELECT * 
				FROM movies 
				WHERE id = :id";

    $stmt = $dbh->prepare($sql);

    //on remplace le paramètre nommé par la valeur venue de l'URL
    $stmt->execute([":id" => $id]);

    //on récupère uniquement ce film
    $movie = $stmt->fetch();
    return $movie;
}