<?php
    class Movie{
        public $title;
        public $director;
        public $releaseYear;
        public $genre;
    }

    $cloneWars = new Movie();

    var_dump($cloneWars);

    $cloneWars->title = 'Star Wars: The Clone Wars';
    $cloneWars->director = 'Dave Filoni';
    $cloneWars->releaseYear = '2008';
    $cloneWars->genre = 'azione, fantascienza';

    var_dump($cloneWars);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
</body>
</html>