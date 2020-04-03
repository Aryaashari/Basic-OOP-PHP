<?php 

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


?>