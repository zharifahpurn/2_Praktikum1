<?php

$arrayBuah = ["Jeruk", "Mangga", "Pisang", "Apel"];

//mengurutkan value dari array
sort($arrayBuah);

//mengurutkan dan menghapus value yang terakhir
array_pop($arrayBuah);

//menghapus keseluruhan isi variable
//bisa juga menghapus spesifik value tertentu
unset($arrayBuah[1]);

//manambahkan value diakhir
array_push($arrayBuah, "Durian");

//menghapus nilai array yang paling awal
array_shift($arrayBuah);

//menambahkan value diawal
array_unshift($arrayBuah, "Semangka", "Buah Naga");

//mengubah spesifik suatu value
$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}