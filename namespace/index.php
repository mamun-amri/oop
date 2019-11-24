<?php
require_once 'App/init.php';

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo '<br>';
new ServiceUser();
