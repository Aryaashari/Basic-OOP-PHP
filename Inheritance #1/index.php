<?php

class Produk {
    public $jenis,
           $merek,
           $harga,
           $ram,
           $penyimpanan,
           $prosessor;

    public function __construct( $jenis = "jenis", $merek = "merek", $harga = 0, $ram = "ram", $penyimpanan = "0 GB", $prosessor ){

        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->ram = $ram;
        $this->penyimpanan = $penyimpanan;
        $this->prosessor = $prosessor;
    }

    public function info(){
        if ($this->jenis == "Hp"){
            $info = "{$this->jenis} | {$this->merek}, Rp. {$this->harga}, {$this->ram} GB, {$this->penyimpanan} GB, {$this->prosessor}";
        }elseif ($this->jenis == "Laptop"){
            $info = "{$this->jenis} | {$this->merek}, Rp. {$this->harga}, {$this->ram} GB, {$this->penyimpanan} GB HDD, {$this->prosessor}";
        }

        return $info;
    }
}

$produk1 = new Produk("Hp", "Samsung", "3000000", "4", "32", "Snapdragon 701");
$produk2 = new Produk("Laptop", "Asus", "6000000", "8", "500", "Intel core i5");

echo $produk2->info();
echo "<br>";
echo $produk1->info();
