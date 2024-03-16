<?php
$input1 = $_GET["Input1"];
$input2 = $_GET["Input2"];
$Math = $_GET["Math"];
$output =0;

echo $Math."<br>";


if($Math =="add"){
    $output = $input1 + $input2;
    echo "output is: " .$output;
}elseif($Math =="minus"){
    $output = $input1 - $input2 ;
    echo "The output is: ".$output;
}elseif($Math =="multiply"){
    $output = $input1 * $input2 ;
    echo "The output is: ".$output;
}elseif($Math =="divide"){
    $output = $input1 / $input2 ;
    echo "The output is: ".$output;
}

?>