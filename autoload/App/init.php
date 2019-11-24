<?php
/* untuk menjalankan fungsi di spl anda harus menulisnya-> nama kelas == nama file  */
spl_autoload_register(function ($class) {
    require_once "Produk/" . $class . ".php";
});
