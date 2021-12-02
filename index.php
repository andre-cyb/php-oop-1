<?php

require_once "./classes/Movie.php";
require_once "./data/data.php";



echo "<h3>"."prova di stampa"."</h3>";
echo "<ul>";
foreach ($movies as $movie) {
    $nolanFilm = new Movie($movie);
    echo "<li>".$nolanFilm->getMovie(). "</li>";
}
echo "</ul>";


/*  echo "<h3>"."prova con modifica tramite funzione set(...)"."</h3>";
echo "<ul>";
$nolanFilm2 = new Movie();
$nolanFilm2->setMovie("inception", "US", 10, 2010);
echo "<li>".$nolanFilm2->getMovie(). "</li>";
echo "</ul>"; */




