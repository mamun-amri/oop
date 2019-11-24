<?php
/* untuk menjalankan fungsi di spl anda harus menulisnya-> nama kelas == nama file  */
spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once "Produk/" . $class . ".php";
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once "Service/" . $class . ".php";
});
