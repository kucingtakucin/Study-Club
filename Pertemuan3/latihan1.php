<?php
// Variabel & tipe data
$nama = "Kirigaya Kazuto";   // String
$nama_panggilan = "Kirito";     // String
$umur = 17;     // Integer
$jenis_kelamin = 'L';   // Char
$menikah = true;   // boolean
$tinggi_badan = 164.5;  // float

$nama2 = "Yuuki Asuna";
$nama_panggilan2 = "Asuna";
$umur2 = 18;
$jenis_kelamin2 = 'P';
$menikah2 = false;
$tinggi_badan2 = 164.5;

$nama3 = "Adam Arthur Faizal";
$nama_panggilan3 = "Arthur";
$umur3 = 18;
$jenis_kelamin3 = 'L';
$menikah3 = false;
$tinggi_badan3 = 162;

echo "Hello, World<br>";
var_dump("<h1>Hello, World</h1><br>");
print "Hello, World<br>";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Latihan 1</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Panggilan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tinggi Badan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $nama ?></td>
                    <td><?= $nama_panggilan ?></td>
                    <td><?= $umur ?> tahun</td>
                    <td><?= $jenis_kelamin ?></td>
                    <td><?= $tinggi_badan ?> cm</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?= $nama2 ?></td>
                    <td><?= $nama_panggilan2 ?></td>
                    <td><?= $umur2 ?> tahun</td>
                    <td><?= $jenis_kelamin2 ?></td>
                    <td><?= $tinggi_badan2 ?> cm</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?= $nama3 ?></td>
                    <td><?= $nama_panggilan3 ?></td>
                    <td><?= $umur3 ?> tahun</td>
                    <td><?= $jenis_kelamin3 ?></td>
                    <td><?= $tinggi_badan3 ?> cm</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>