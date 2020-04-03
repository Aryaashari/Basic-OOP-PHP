<?php 

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

?>