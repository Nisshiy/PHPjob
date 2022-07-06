<?php
//練習問題1

function calc_sum($unit_price, $num){
    return $unit_price * $num;
}

$fruits_value = ["りんご"=>200, "みかん"=>100, "桃"=>250];
$number = [2,3,4];

$i = 0;
foreach ($fruits_value as $key => $value){
    $sum = calc_sum($value,$number[$i]);
    echo "${key}は${sum}円です。";
    echo "<br>";
    $i += 1;
}
?>