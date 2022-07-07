<?php
    $src = $_POST['src'];
    $trg = $src[mt_rand(0,strlen($src)-1)];
    $trg = intval($trg);
    if ($trg==0){
        $luck = '凶';
    } elseif ($trg>=1 && $trg <=3){
        $luck = '小吉';
    } elseif ($trg>=4 && $trg <=6){
        $luck = '中吉';
    } elseif ($trg>=7 && $trg <=8){
        $luck = '吉';
    } elseif ($trg==9){
        $luck = '大吉';
    }
    printf("%sの運勢は<br>",date("Y/m/d",time()));
    printf("選ばれた数字は%d<br>",$trg);
    printf("%s", $luck);
?>
    