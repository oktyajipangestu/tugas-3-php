<?php

$tabungan = 150000;
$bunga = 12.5;
$total = $tabungan + ($tabungan*$bunga)/100;

echo "Tabungan Awal = Rp " . $tabungan . "<br>";
echo "Bunga Setahun = " . $bunga . "% <br>";
echo "Total Tabungan Setahun = ? <br>";
echo "Jawaban : Rp " . $total;

?>