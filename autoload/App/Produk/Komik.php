<?php
class Komik extends Produk implements InfoProduk
{
    public $halaman;

    public function getJudul()
    {
        return $this->judul;
    }

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->halaman  = $halaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman";
        return $str;
    }
}
