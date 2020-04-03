<?php 

interface InfoFilm {
    public function infoFilm();
}

class Film {

    private $judul,
            $tahunRilis,
            $durasi,
            $sutradara;
    
    public function __construct( $judul = "judul", $tahunRilis = "tahun rilis", $durasi = 0, $sutradara = "sutradara" )
    {
        $this->judul = $judul;
        $this->tahunRilis = $tahunRilis;
        $this->durasi = $durasi;
        $this->sutradara = $sutradara;
    }

    // SETTER & GETTER DARI JUDUL
    public function getJudul (){
        return "{$this->judul}";
    }

    // SETTER & GETTER DARI TAHUN LIRIS
    public function getTahun() {
        return "{$this->tahunRilis}";
    }

    // SETTER & GETTER DARI DURASI
    public function getDurasi() {
        return "{$this->durasi}";
    }

    // SETTER & GETTER DARI SUTRADARA
    public function getSutradara() {
        return "{$this->sutradara}";
    }

    public function getInfo() {
        $str = "{$this->judul} : {$this->tahunRilis}, {$this->durasi} Menit, {$this->sutradara}";
        return $str;
    }

} 


class TambahPemain extends Film implements InfoFilm{
    public $pemain = [];

    public function __construct($pemain) 
    {
        $this->pemain[] = $pemain;  
    }

    public function getPemain() {
        $str = "Daftar Pemain : <br>";

        foreach ($this->pemain[0] as $pemain){
            $str .= "{$pemain} <br>";
        }
        return $str;
    }

    public function infoFilm()
    {
        $str = parent::getJudul() . ": " . parent::getTahun() . ", " . parent::getDurasi() . " Menit, " . parent::getSutradara();

        foreach ($this->pemain[0] as $pemain){
            $str .= "{$pemain}";
        }
        return $str;
    }

}

$film1 = new Film ("Hangout", 2017, 120, "Raditya Dika");
echo $film1->getInfo();

echo "<br>";

$pHangout = ["Raditya Dika", "Bayu Skak", "Prily Latuconsina", "Arya", "Ashari"];

$hangout = new TambahPemain($pHangout);
echo $hangout->getPemain();

echo "<hr>";

$pKoalaKumal = ["Raditya Dika", "Arya Ashari"];
$koala = new TambahPemain($pKoalaKumal);

echo $koala->infoFilm();

echo $film1->getSutradara();

?>