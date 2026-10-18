<?php
$angka = range(1,20);

// menggunakan foreach
foreach ($angka as $i){
    if ($i % 3 == 0){
        echo $i . "<br>";
    }
}

// menggunakan for
for ($i = 0 ; $i < count($angka); $i++){
    if ($angka[$i] % 3 == 0){
        echo $angka[$i] . "<br>";
    }
}
?>