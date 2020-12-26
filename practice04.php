<?php

function double($x){
    echo $x * 2;
    echo "\n";
}


function f($a, $b){
    echo $a + $b;
    echo "\n";
}


$arr = array(1 ,3 ,5 ,7 ,9);
function f2($arr){
    
}


function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        
    }
    return $max_number;
}


$text = '<p>あいうえお</p>';
echo strip_tags($text);
echo $text;
echo "\n";


$colors = array("rad" ,"blue");
array_push ($colors ,"green" ,"orange");
print_r ($colors);


$animal1 = ["dog" ,"cat"];
$animal2 = ["pig" ,"mouse"];
$result = array_merge($animal1 ,$animal2);
print_r ($result);


echo time();
echo "\n";


echo mktime (8 ,30 ,0 ,12 ,27 ,2020);
echo "\n";

echo date ("y/m/d");
echo "\n";




?>