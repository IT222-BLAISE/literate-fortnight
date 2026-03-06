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

$cars[] = "toyoya";
$cars[] = "suzuki";

$toys[] = "car";
$toys[] = "gun";
$toys[] = "doll";

echo $cars[0] . '<br>';
echo $cars[1] . '<br>';
echo $cars[2] . '<br>';
echo $cars[3] . '<br>';
echo $cars[4] . '<br>';


echo '<br>';

echo $toys[0] . '<br>';
echo $toys[1] . '<br>';
echo $toys[2] . '<br>';

echo '<br>';

$ages['anna'] = 28;

echo 'peter is '. $ages['peter'] . '<br>';
echo 'carlo is '. $ages['carlo'] . '<br>';
echo 'john is '. $ages['john'] . '<br>';
echo 'anna is '. $ages['anna'] . '<br>';

echo '<br>';
echo "Is ". $families['NIBATO'][0] . " part of nibato fam <br>";
echo "Is ". $families['NIBATO'][1] . " part of nibato fam <br>";


