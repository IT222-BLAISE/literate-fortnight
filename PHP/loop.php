<?php

$cars = array("honda", "BMW", "Ferrari");
$toys = [];
$ages = ["peter" => 42, "carlo" => 28, "john" => 24];
$families = ["NIBATO" => [
                "john",
                "carlo",
                "steven"],
            "DOE" => [
                "carla",
                "bryan",
                "anna"
            ]
            ];
$i = 0;

while($i < count($cars)){
    echo $cars[$i] . '<br>';

    $i++;
}

echo '<br>';

$a = 0;
$keys = array_keys($ages);
while($a < count($keys)){
    $key = $keys[$a];
    echo  $ages[$key] . '<br>';

    $a++;
}

echo '<br>';

for($i = 0; $i < count($cars); $i++){
    echo $cars[$i] . '<br>';
}

echo '<br>';

foreach($cars as $car){
    echo $car . '<br>';
}