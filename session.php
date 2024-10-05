<?php

/******
$color = array();

$color = ["green", "blue", "red"];
echo $color[2];

$color[] = "black";



echo json_encode($color), "<br>";

$color[0] = "yellow";

echo json_encode($color), "<br>";


echo json_encode($color), "<br>";
unset ($color[1]);
echo json_encode($color), "<br>";



$data = ["john doe", 23, "Bacoor, Cavite", "BSIT", 4102, "09999999999"];
echo $data[3];
echo json_encode($color), "<br>";


//associative arrays
$body = ["eyes" => "eyebrows", "lips" => "mouth", "nostrils" => "nose"];
echo json_encode($body), "<br>";


//adding arrays
$student = ["name" => "John Doe",
            "course" => "BSIT",
            "email" => "jdoe@zzz.com"];


echo json_encode($student), "<br>";

// foreach loop
foreach($student as $row){
echo $row."<br>";} ******/

// funct
function showName($name,$amount){
    /* "blank name"
    "0" */
    echo "HELLO THERE, ".$name.", YOUR TOTAL AMOUNT DUE IS ".$amount."<br>";
}
// $username="moo deng";

showName("JANE DOE", 5000);
// showName($username);

function computeFare($fare, $disc){
    $totalDisc=$fare*($disc/100);
    $totalFare=$fare-$totalDisc;
    return $totalFare;
}

echo computeFare(200,20);
?>
