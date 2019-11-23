<?php
class Produk
{
    // property
    public  $judul,
        $penerbit   = "penerbit",
        $penulis    = "penulis",
        $harga      = 0;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0)
    {
        $this->judul    = $judul;
        $this->penerbit = $penerbit;
        $this->penulis  = $penulis;
        $this->harga    = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masahi", "Shunen", 30000);
$produk2 = new Produk("Good Of War", "Ceo", "Cantik", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
