<?php

function salam()
{
    echo "Hello, World <br>";
}
// public static int penjumlahan(int a, int b) {...}
function penjumlahan($a, $b): int
{
    return $a + $b;
}
//
//function pengurangan(int $a, int $b): int
//{
//    return $a - $b;
//}
salam();
echo (penjumlahan(3, 3)) . '<br>';
//echo(pengurangan(4, 7));


$angka = 3.7;
echo (ceil($angka) . '<br>'); // Pembulatan ke atas
echo (round($angka) . '<br>');    // Pembulatan terdekat
echo (floor($angka) . '<br>');  // Pembulatan ke bawah