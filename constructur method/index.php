<?php

class Sekolah {

    public $kelas,
           $wali,
           $ketuaKelas,
           $wakilKelas,
           $serketaris,
           $bendahara;
    
    public function __construct( $kelas, $wali, $ketuaKelas, $wakilKelas, $serketaris, $bendahara ) {
        $this->kelas = $kelas;
        $this->wali = $wali;
        $this->ketuaKelas = $ketuaKelas;
        $this->wakilKelas = $wakilKelas;
        $this->serketaris = $serketaris;
        $this->bendahara = $bendahara;
    }
        
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

$data1 = new Sekolah("X TKJ B", "Pak Dhany", "Irsan", "Septian", "Risky", "Rizal");
$data2 = new Sekolah("XI TKJ B", "Pak Julian", "Vicki", "Arya", "Evanthe", "Sherwin");

echo $data2->kelas();
echo $data1->kelas();

?>


