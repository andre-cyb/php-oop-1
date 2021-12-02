<?php

require_once "./classes/Movie.php";
require_once "./data/data.php";



echo "<h3>"."Christopher Nolan film"."</h3>";
echo "<ul>";
foreach ($Nolan as $movie) {
    $nolanFilm = new Movie($movie);
    echo "<li>".$nolanFilm->getMovie(). "</li>";
}
echo "</ul>";



echo "<h3>"."Quentin Tarantino film"."</h3>";
echo "<ul>";
foreach ($Tarantino as $movie) {
    $nolanFilm = new Movie($movie);
    echo "<li>".$nolanFilm->getMovie(). "</li>";
}
echo "</ul>";




