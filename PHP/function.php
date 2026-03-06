<?php 

function writemsg(){
    echo "hello world";
}

function familyname($fname, $year){
    echo "$fname Nibato is born in $year <br>";
}

function setHeight($minheigh = 50){
    echo "the height is $minheigh <br>";
}

function sum($x,$y){
    $z = $x + $y;

    $message = "The sum of $x and $y is $z";

    return $message;
}