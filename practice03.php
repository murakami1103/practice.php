<?php
$name = "村上晴";
if ($name = "村上晴") {
    echo "あなたの名前ではありません";
}
echo "\n";

$total =0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

$fruit = array("apple","banana","melon","lemon","peach");
foreach($fruit as $fruit){
    echo $fruit;
    echo "\n";
}


$start = 1;

$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}




?>