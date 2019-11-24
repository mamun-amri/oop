<?php
class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function getJudul()
    {
        return $this->judul;
    }

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktuMain  = $waktuMain;
    }

    public function getInfoProduk()
    {
        /* parent::getInfoProduk() contoh overriding */
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}
