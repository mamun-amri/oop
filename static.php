<?php
class Contoh_static
{
    public static $angka = 1;

    public static function halo()
    {
        return "hallo " . self::$angka++ . " kali";
    }
}

echo Contoh_static::$angka;
echo '<br>';
/* echo Contoh_static::halo() . "<br>";
echo Contoh_static::halo() . "<br>";
echo Contoh_static::halo() . "<br>"; */
echo '<hr>';
$obj = new Contoh_static();
echo $obj::halo() . "<br>";
echo $obj::halo() . "<br>";
echo $obj::halo() . "<br>";
echo '<hr>';
$obj1 = new Contoh_static();
echo $obj1::halo() . "<br>";
echo $obj1::halo() . "<br>";
echo $obj1::halo() . "<br>";
