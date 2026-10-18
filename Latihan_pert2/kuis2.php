<?php
function hitungNilai($tugas, $uts, $uas){
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 70){
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Status: " . $status;
}

hitungNilai(80, 84, 70);

?>