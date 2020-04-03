<?php

//Studi Kasus
// Toko yang menjual buku dan game


interface InfoProduk {
    public function getinfoProduk();
}


abstract class Produk {
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
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



    abstract public function infoProduk(); 

    // setter & getter dari judul
    public function setJudul( $judul ) {
        if (! is_string($judul)){
            throw new Exception("Judul harus string!!!");
        }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    // setter & getter dari penulis
    public function setPenulis( $penulis ){
        if ( ! is_string($penulis)){
            throw new Exception("Penulis harus srting!!!");
            
        }
        $this->penulis = $penulis;
    } 

    public function getPenulis(){
        return $this->penulis;
    }

    // setter & getter dari penerbit
    public function setPenerbit( $penerbit ) {
        if ( ! is_string($penerbit)){
            throw new Exception("Penerbit harus string!!!");
            
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;   
    }

    // setter diskon
    public function setDiskon ( $diskon ) {
        $this->diskon = $diskon;
    }

}




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



class Novel extends Produk implements InfoProduk {
    public $halaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->halaman = $halaman;
    }

    public function infoProduk() {
        $str = "{$this->judul}, {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})";
        return $str;
    }

    public function getinfoProduk() {
        $info = "Novel : " . $this->infoProduk() . ", {$this->halaman} Halaman";
        return $info;
    }

}



class CetakInfo {
    public $produk = [];

    public function tambahProduk( Produk $produk ) {
        $this->produk[] = $produk;
    }

    public function info(){
        $str = "Daftar Produk : <br>";

        foreach ($this->produk as $data) {
            $str .= "- {$data->getinfoProduk()} <br>";
        }

        return $str;
    }  
}



$produk1 = new Buku("Belejar PHP", "Risky Ristanto", "Gramedia", "100000", "200");
$produk2 = new Game("Pes 2020", "PES", "PES", "250000", "100");
$produk3 = new Novel("Dilan", "Pidi Baiq", "Gramedia", "150000", "138");

$cetakInfo = new CetakInfo();
$cetakInfo->tambahProduk( $produk1 );
$cetakInfo->tambahProduk( $produk2 );
$cetakInfo->tambahProduk( $produk3 );

echo $cetakInfo->info();

// $tes = new Produk();


