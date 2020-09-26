<?php
// Array biasa
$anime_romance = [
    'Kanojo Okarishimasu',
    'Tonikaku Kawaii'
];
$anime_romance[3] = 'Clannad';

//echo $anime_romance[3];
//var_dump($anime_romance );


// Array assosiatif -> key => value
$mahasiswa = [
    "nama" => "Hikkigaya Hachiman",
    "nim" => "M3120000",
    "anime" => "Oregairu",
];

$mahasiswa["heroine"] = "Yukino";

//var_dump($mahasiswa);
//echo $mahasiswa["nama"];

//// Variable lokal
//
//function halo()
//{
//    global $anime;
//    $nama = "Yukinoshita"; // variable lokal
//    echo $anime;
//}
//
////echo $nama;
//
//
//// Variable global
//$anime = "Tate no Yuusha";
//halo();


// Variable super global => Array Asosiatif
//var_dump($_SERVER);

// $_GET && $_POST
//$_GET["heroine"] = "Yuzaki Tsukasa";
//var_dump($_GET);

var_dump($_POST);