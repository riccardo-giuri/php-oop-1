<?php
require_once __DIR__ . '/movie.php';

$moviesList = [
    new Movie(
        _director: 'Christopher Nolan',
        _title: 'The Dark Night',
        _minutes: 155,
        _releaseYear: 2008,
        _genre: 'Action'
    ),
    new Movie(
        _director: 'Christopher Nolan',
        _title: 'Oppenheimer',
        _minutes: 180,
        _releaseYear: 2023,
        _genre: 'Biography'
    ),
    new Movie(
        _director: 'Stanley Kubrik',
        _title: 'A Clockwork Orange',
        _minutes: 136,
        _releaseYear: 1971,
        _genre: 'Crime'
    ),
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie-Giuri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center mb-5">Movies</h1>

    <div class="container">
        <div class="row">
            <?php
            foreach($moviesList as $movies) {
            ?>
                <div class="col-4">
                    <ul>
                        <li>Titolo: <?php echo $movies->title?></li>
                        <li>Anno Uscita: <?php echo $movies->releaseYear?></li>
                        <li>Regista: <?php echo $movies->director?></li>
                        <li>Durata: <?php echo $movies->minutes?> minuti</li>
                        <li>Genere: <?php echo $movies->genre?></li>
                    </ul>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>