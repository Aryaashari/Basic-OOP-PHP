<?php 

class Buku extends Produk implements InfoProduk {
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }

    public function infoProduk() {
        $str = "{$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $str;
    }

    public function getinfoProduk(){

        $info = "Buku : " . $this->infoProduk() . ", {$this->halaman} Halaman";

        return $info;
    }

}

?>