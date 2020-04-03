<?php 

// class Contoh {
//     public static $nama = "Arya",
//                   $no = "1";

//     public static function halo(){
//         return "Hallo " . self::$nama . "" .  self::$no++ . " Kali";
//     }
// }

// echo Contoh::$nama;
// echo "<br>";
// echo Contoh::halo();
// echo "<br>";
// echo Contoh::halo();



class Nama {
    public static $nama = "nama",
                  $no = 1;

    public function __construct($nama)
    {
        self::$nama = $nama;
    }

    public function halo ()
    {
        return self::$no++ . ". Hallo Nama Saya " .  self::$nama . "<br>"; 
    }
}

$nama1 = new Nama("Arya Ashari");

echo $nama1->halo();
echo $nama1->halo();
echo $nama1->halo();
echo $nama1->halo();

echo "<hr>";

$nama2 = new Nama("Arya");

echo $nama2->halo();
echo $nama2->halo();
echo $nama2->halo();
echo $nama2->halo();

?>