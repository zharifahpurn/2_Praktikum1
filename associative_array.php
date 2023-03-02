<?php
// asosiatif array
$profileArray = [
    "nama" => "Zharifah Dzikra Purnomo", 
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"]. "<br>";

//multi dimensional array
$profileMultiArray = [
    [
        "nama" => "Zharifah Dzikra Purnomo",
        "semester" => 2
    ], [
        "nama" => "Fauzi",
        "semester" => 7
    ], [
        "nama" => "Paul Scholes",
        "semester" => 2
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile["nama"] . "<br>";
    echo $profile["semester"]. "<br>";
}