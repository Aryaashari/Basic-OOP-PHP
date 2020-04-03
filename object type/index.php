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
        

}


class InfoKelas {

    public function Kelas( Sekolah $kelas ){
        $info = "{$kelas->kelas} | {$kelas->wali}, {$kelas->ketuaKelas}, {$kelas->wakilKelas}, {$kelas->serketaris}, {$kelas->bendahara}";
        return $info;
    }
}

$data1 = new Sekolah("X TKJ B", "Pak Dhany", "Irsan", "Septian", "Risky", "Rizal");
$data2 = new Sekolah("XI TKJ B", "Pak Julian", "Vicki", "Arya", "Evanthe", "Sherwin");

$info = new InfoKelas();

echo $info->Kelas($data2);

?>


