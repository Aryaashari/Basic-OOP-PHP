<?php

class Sekolah {

    public $kelas,
           $wali,
           $ketuaKelas,
           $wakilKelas,
           $serketaris,
           $bendahara;
        
    public function kelas(){
        
        echo "<br>";
        echo "$this->kelas";
        echo "<br>";
        echo "<br>";
        echo "Wali : " . $this->wali;
        echo "<br>";
        echo "Ketua : ". $this->ketuaKelas;
        echo "<br>";
        echo "Wakil : ". $this->wakilKelas;
        echo "<br>";
        echo "Serketaris : ". $this->serketaris;
        echo "<br>";
        echo "Bendahara : ". $this->bendahara;
    }

}

$data1 = new Sekolah();
$data1->kelas = "XI TKJ C";
$data1->wali = "Pak Charles";
$data1->ketuaKelas = "Eko";
$data1->wakilKelas = "Satria";
$data1->serketaris = "Sri";
$data1->bendahara = "Marietha";

$data2 = new Sekolah();
$data2->kelas = "XI TKJ B";
$data2->wali = "Pak Julian";
$data2->ketuaKelas = "Vicki";
$data2->wakilKetua = "Arya";
$data2->serketaris = "Evanthe";
$data2->bendahara = "Sherwin";


echo $data1->kelas();
echo $data2->kelas();

