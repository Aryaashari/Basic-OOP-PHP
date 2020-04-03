<?php

class Siswa {

    public $nama,
           $umur,
           $alamat;

    public function __construct( $nama = "Nama", $umur = "Umur", $alamat = "Alamat" ) {

        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
    }

    public function biodata(){
        return "$this->nama | $this->umur, $this->alamat";
    }


}

$siswa1 = new Siswa( "Arya", "16 Tahun" );

echo $siswa1->biodata();