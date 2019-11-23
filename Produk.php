<?php
class Produk
{
    // property
    public  $judul  = "judul",
        $penerbit   = "penerbit",
        $penulis    = "penulis",
        $harga      = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk2 = new Produk();

$produk1->judul = "Naruto";
$produk1->penerbit = "Masashi";
$produk1->penulis = "Shunen";
$produk1->harga = 30000;

$produk2->judul = "Good Of War";
$produk2->penerbit = "Shanki";
$produk2->penulis = "Suek";
$produk2->harga = 230000;

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
