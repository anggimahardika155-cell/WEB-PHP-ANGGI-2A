<?php
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Anggi Mahardika Dwi Utami<br/>";
}
 
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya Anggi Mahardika Dwi Utami </h3>";
    echo "Saya dari Nganjuk <br>";
    echo "Umur saya adalah ". hitungUmur(2005, 2026) ." tahun";
}
 
//memanggil function salam
salam();
 
$siswa="Ani";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>