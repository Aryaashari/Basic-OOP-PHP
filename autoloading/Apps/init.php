<?php  

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Buku.php';
// require 'Produk/Game.php';
// require 'Produk/Novel.php';
// require 'Produk/CetakInfo.php';

spl_autoload_register(function($class){

    require 'Produk/' . $class . '.php';
});

?>