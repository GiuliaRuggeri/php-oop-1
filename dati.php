<?php

require __DIR__ . "/Models/Movie.php";

$genres1 = [
    "fantasy", "comedy"
];

$genres2 = [
    "horror", "comedy"
];

$actors1 = [

    "Michael J. Fox", "Christopher Lloyd", "Claudia Wells"
];

$actors2 = [

    "Kiefer Sutherland", "Corey Haim", "Corey Feldman"

];

$BackToTheFuture = new Movie("Back to the future", 1985, $genres1, "english", $actors1, "Robert Zemeckis", "USA", 116);
$TheLostBoys = new Movie("The lost boys", 1987, $genres2, "english", $actors2, "Joel Schumacher", "USA", 98);

$movies = [
    $BackToTheFuture,
    $TheLostBoys,
];
?>

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Year</th>
            <th scope="col">Genres</th> 
            <th scope="col">Actors</th>
            <th scope="col">Director</th>
            <th scope="col">Country</th>
            <th scope="col">Running time</th>
            <th scope="col">Language</th>
           
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($movies as $movie) {
            echo  "<tr><td>" . $movie->name . "</td>";
            echo  "<td>" . $movie->year . "</td>";
            echo  "<td>" . $movie->getGenreList() . "</td>";
            echo  "<td>" . $movie->getActor() . "</td>";
            echo  "<td>" . $movie->director . "</td>";
            echo  "<td>" . $movie->country . "</td>";
            echo  "<td>" . $movie->runningtime . "</td>";
            echo  "<td>" . $movie->language . "</td></tr>";
        };

        ?>