<?php
class Produk
{
    // property
    public  $judul,
        $penerbit,
        $penulis;

    protected $diskon = 0;
    protected $harga;

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

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul}|{$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

// contoh object type
// class cetakProduk
// {
//     public function cetak(Produk $produk)
//     {
//         $str = "{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
//         return $str;
//     }
// }

class Komik extends Produk
{
    public $halaman;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->halaman  = $halaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktuMain  = $waktuMain;
    }

    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        /* parent::getInfoProduk() contoh overriding */
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masahi", "Shunen", 30000, 100);
$produk2 = new Game("Good Of War", "Ceo", "Cantik", 250000, 5);

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo '<br>';
$produk2->setDiskon(50);
echo $produk2->getHarga();
// example Object type
// echo '<hr>';
// $cetakProduk = new cetakProduk();
// echo $cetakProduk->cetak($produk1);
