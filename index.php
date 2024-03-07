<?php
    class Movie{
        public $title;
        public $director;
        public $releaseYear;
        public $genre;

        public function setDirector($nomeDirector){
            return $this->director = $nomeDirector;
        }

        public function getDirector(){
            return $this->director;
        }
    }

    $cloneWars = new Movie();

    $cloneWars->title = 'Star Wars: The Clone Wars';
    $cloneWars->director = 'Dave Filoni';
    $cloneWars->releaseYear = '2008';
    $cloneWars->genre = 'azione, fantascienza';

    var_dump($cloneWars);

    $rogueOne = new Movie();

    $rogueOne->title = 'Rogue One: A Star Wars Story';
    $rogueOne->director = 'Gareth Edwards';
    $rogueOne->releaseYear = '2016';
    $rogueOne->genre = 'azione, fantascienza';

    var_dump($rogueOne);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
    <?php
        $cloneWars->setDirector('Dave Filoni');
        echo $cloneWars->getDirector();

        $rogueOne->setDirector('Gareth Edwards');
        echo $rogueOne->getDirector();
    ?>

</body>
</html>