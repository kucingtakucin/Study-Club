<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM ANIME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center font-weight-bold mt-5">FORM ANIME</h1>
        <form method="get" action="">
            <div class="form-group">
                <label>
                    Nama
                </label>
                <input type="text" name="nama_anime" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    Genre
                </label>
                <input type="text" name="genre_anime" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    Karakter
                </label>
                <input type="text" name="karakter" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
        <?php
        echo "Ini adalah POST: ";
        var_dump($_POST);
        echo "<br>Ini adalah GET: ";
        var_dump($_GET);

        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>