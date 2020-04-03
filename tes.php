<?php 


class siswa {

    public $nama,
           $umur,
           $alamat;
    
    public function __construct( $nama = "Nama", $umur = "Umur", $alamat = "Alamat" ){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
    }
}

$siswa1 = new siswa( "Arya", "16 Tahun", "Btn. Pemda" );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <td><?= $siswa1->nama ?></td>
        <td><?= $siswa1->umur ?></td>
        <td><?= $siswa1->alamat ?></td>
    </tr>
</table>
    
</body>
</html>