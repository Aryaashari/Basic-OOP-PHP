<?php

//Studi Kasus
// Toko yang menjual buku dan game

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jumlah;
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlah = 0 ){

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    public function infoProduk(){
        $str = "{$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
    }
}

class Buku extends Produk {
    public $info = false;

    public function infoProduk(){
        $this->info = true;

        $info = "Buku : {$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}), {$this->jumlah} Halaman";

        return $info;
    }

}

class Game extends Produk {

    public function infoProduk(){

        $info = "Game : {$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}), {$this->jumlah} Jam";

        return $info;
    }
}

$produk1 = new Buku("Belejar PHP", "Risky Ristanto", "Gramedia", "100000", "200");
$produk2 = new Game("Pes 2020", "PES", "PES", "250000", "100");
$produk3 = new Buku("Master Web", "Hardi Sutarno", "Gramedia", "70000", "100");

echo $produk1->infoProduk();
echo "<br>";
echo $produk2->infoProduk();
echo "<br>";
echo $produk3->infoProduk();