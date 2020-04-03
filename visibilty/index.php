<?php

//Studi Kasus
// Toko yang menjual buku dan game

class Produk {
    public $judul,
           $penulis,
           $penerbit;
    
    protected $diskon;
    private $harga;
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function infoProduk(){
        $str = "{$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $str;
    }
}

class Buku extends Produk {
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function infoProduk(){

        $info = "Buku : " . parent::infoProduk() . ", {$this->halaman} Halaman";

        return $info;
    }

}

class Game extends Produk {
    public $waktu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktu = $waktu;
    }

    public function infoProduk(){

        $info = "Game : " . parent::infoProduk() . ", {$this->waktu} Jam";

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
echo "<hr>";

$produk1->setDiskon(75);
echo $produk1->getHarga();