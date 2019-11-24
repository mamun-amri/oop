<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masahi", "Shunen", 30000, 100);
$produk2 = new Game("Good Of War", "Ceo", "Cantik", 250000, 5);

$cetak = new cetakProduk();

$cetak->tambahProduk($produk1);
$cetak->tambahProduk($produk2);

echo $cetak->cetak();
