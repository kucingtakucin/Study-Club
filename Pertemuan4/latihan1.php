<?php
// Array 
$anime_action = [
    'Sword Art Online',
    'Tate no Yuusha',
    'Rakudai Kishi no Cavalry'
];

$anime_romance_happy_end = [
    'Clannad', // Indeks 0
    'Tsuki ga Kirei', // Indeks 1
    'Golden time', // Indeks 2
    'Ao Haru Ride'      // Indeks 3
];

$anime_romance_sad_end = [
    'Shigatsu wa kimi no uso',
    'Angel Beats',
];

// Array Associative
$anime_romance = [
    'happy_ending' => 'clannad',
    'sad_ending' => 'shigatsu wa kimi no uso'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 - Latihan 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Study Club</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-4">
            <h1 class="font-weight-bold">Daftar anime romance terbaik</h1>
            <h3>1. Happy ending</h3>
            <ol class="list-group">
                <?php for ($i = 0; $i <= count($anime_romance_happy_end) - 1; $i++) : ?>
                    <li class="list-group-item"><?= $anime_romance_happy_end[$i] ?></li>
                <?php endfor ?>
            </ol>
            <h3>2. Sad ending</h3>
            <ol class="list-group">
                <?php for ($i = 0; $i <= count($anime_romance_sad_end) - 1; $i++) : ?>
                    <li class="list-group-item"><?= $anime_romance_sad_end[$i] ?></li>
                <?php endfor ?>
            </ol>
        </div>


        <h1><?= $anime_romance['happy_ending'] ?></h1>
        <h1><?= $anime_romance['sad_ending'] ?></h1>
    </main>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>