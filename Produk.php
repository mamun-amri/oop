<?php
class Produk
{
    // property
    public  $judul,
        $penerbit,
        $penulis,
        $harga,
        $halaman,
        $waktuMain;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $halaman = 0, $waktuMain = 0)
    {
        $this->judul    = $judul;
        $this->penerbit = $penerbit;
        $this->penulis  = $penulis;
        $this->harga    = $harga;
        $this->halaman  = $halaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul}|{$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

// contoh object type
class cetakProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        /* parent::getInfoProduk() contoh overriding */
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masahi", "Shunen", 30000, 100);
$produk2 = new Game("Good Of War", "Ceo", "Cantik", 250000, 0, 5);

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo '<br>';
// example Object type
echo '<hr>';
$cetakProduk = new cetakProduk();
echo $cetakProduk->cetak($produk1);
