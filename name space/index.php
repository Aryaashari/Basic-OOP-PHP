<?php 

require 'Apps/init.php';

// $produk1 = new Buku("Belejar PHP", "Risky Ristanto", "Gramedia", "100000", "200");
// $produk2 = new Game("Pes 2020", "PES", "PES", "250000", "100");
// $produk3 = new Novel("Dilan", "Pidi Baiq", "Gramedia", "150000", "138");

// $cetakInfo = new CetakInfo();
// $cetakInfo->tambahProduk( $produk1 );
// $cetakInfo->tambahProduk( $produk2 );
// $cetakInfo->tambahProduk( $produk3 );

// echo $cetakInfo->info();

use Apps\Produk\User as ProdukUser;
use Apps\Service\User as ServiceUser;



new ServiceUser();
echo "<br>";
new ProdukUser();


?>