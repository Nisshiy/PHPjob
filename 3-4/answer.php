<link rel="stylesheet" href="css/style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$ans_q1 = $_POST['q1'];
$ans_q2 = $_POST['q2'];
$ans_q3 = $_POST['q3'];

$cor_q1 = $_POST['cor_q1'];
$cor_q2 = $_POST['cor_q2'];
$cor_q3 = $_POST['cor_q3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check_answer($ans, $cor){
    if ($ans==$cor) {
        return "正解！";
    } else {
        return "残念・・・";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($ans_q1,$cor_q1); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($ans_q2,$cor_q2); ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($ans_q3,$cor_q3); ?>