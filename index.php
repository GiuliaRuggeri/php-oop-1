<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
<?php

require __DIR__ . "/Models/Movie.php";

$BackToTheFuture= new Movie("Back to the future", 1985, "fantasy", "english");
$TheLostBoys= new Movie("The lost boys", 1987, "horror", "english");

var_dump($BackToTheFuture);
var_dump($TheLostBoys);

?>

</body>
</html>