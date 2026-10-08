<?php

$nama = "Budi";
$kelas = "XI RPL";
$jurusan = "Rekayasa Perangkat Lunak";
$umur = 17;
$nilai =  87.5;

echo "====================<br>";
echo "KARTU PROFIL SISWA<br>";
echo "====================<br>";

printf("Nama  :%s<br>",$nama);
printf("Kelas  :%s<br>",$kelas);
printf("Jurusan  :%s<br>",$jurusan);
printf("Umur  :%d tahun<br>",$umur);
printf("Nilai  :%.1f<br>",$nilai);

if ($nilai >=75){
    $status ="LULUS";
} else {
    $status = "TIDAK LULUS";
}

echo "Status :".$status."<br>";

echo "=====================<br>";

?>