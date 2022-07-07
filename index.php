<?php
include_once __DIR__ . '/Movie.php';

$arrayFilm = [];

$ioSonoLeggenda = new Movie('Io sono Leggenda', 'azione', 2007, 'James Lassiter', 0);
$ironMan3 = new Movie('iron man 3', 'azione/fantascienza', 2013, 'Shane Black', 0);
$captainAmerica = new Movie('Captain America: The Winter Soldier', 'azione', 2014, 'Joe Russo', 0);
$doctorStrange = new Movie('Doctor Strange', 'azione', 2016, 'Scott Derrickson', 0);

array_push($arrayFilm, $ioSonoLeggenda, $ironMan3, $captainAmerica, $doctorStrange);

// var_dump($arrayFilm);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>
<body>
    <div class="container"><?php
        
        foreach ($arrayFilm as $film) { ?>
            <div class="film-card">
                <h1>
                    Titolo:
                    <?= $film->title ?>
                </h1>
                <ul>
                    <li>
                        Genere: 
                        <?= $film->genre ?>
                    </li>
                    <li>
                        Anno: 
                        <?= $film->year ?>
                    </li>
                    <li>
                        Regista: 
                        <?= $film->director ?>
                    </li>
                    <li>
                        Voto: 
                        <?= $film->rating ?>
                    </li>
                    
                </ul>
            </div><?php 
        }


        
            

    ?>
    </div>
</body>
</html>