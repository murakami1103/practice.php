<?php

function double($x){
    return $x * 2;
}
$wnum = double(4);
echo $wnum;
echo "\n";



function f($a, $b){
    return $a + $b;
}
$num = f(3,5);
echo $num;
echo "\n";


$arr = array(1 ,20 ,5 ,7 ,9);
function f2($x){
    $result = 1;
    foreach($x as $a){
        $result = $result * $a;
        echo $result;
        echo "\n";
    }
    return $result;
}
f2($arr);

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
            
        }
    }
    return $max_number;
}
echo max_array($arr);


$text = '<p>あいうえお</p>';
echo strip_tags($text);
$text = strip_tags($text);
echo $text;
echo "\n";


$colors = array("rad" ,"blue");
array_push ($colors ,"green" ,"orange");
print_r ($colors);
echo "\n";

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


function tax($x){
    return $x * 1.05;
}
echo tax(200);
echo "\n";




?>