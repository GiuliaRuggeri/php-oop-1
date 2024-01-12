<?php

require __DIR__ . "/Models/Movie.php";

$BackToTheFuture= new Movie("Back to the future", 1985, "fantasy", "english");
$TheLostBoys= new Movie("The lost boys", 1987, "horror", "english");

$movies=[
    $BackToTheFuture,
    $TheLostBoys,
];


var_dump($movies);

?>