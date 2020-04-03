<?php  

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Buku.php';
// require 'Produk/Game.php';
// require 'Produk/Novel.php';
// require 'Produk/CetakInfo.php';
// require 'Produk/User.php';
// require 'Service/User.php';

spl_autoload_register(function($class){

    $class = explode('\\', $class);
    $class = end($class);
    require 'Produk/' . $class . '.php';
    
});

spl_autoload_register(function($class){

    $class = explode('\\', $class);
    $class = end($class);
    require 'Service/' . $class . '.php';
    
});

?>