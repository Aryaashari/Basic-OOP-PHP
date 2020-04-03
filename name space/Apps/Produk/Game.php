<?php 

class Game extends Produk implements InfoProduk {
    public $waktu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktu = $waktu;
    }

    public function infoProduk() {
        $str = "{$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $str;
    }

    public function getinfoProduk(){

        $info = "Game : " . $this->infoProduk() . ", {$this->waktu} Jam";

        return $info;
    }
}

?>