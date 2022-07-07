<link rel="stylesheet" href="css/style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$choices_q1 = [80,22,20,21];
$choices_q2 = ['PHP','Python','JAVA','HTML'];
$choices_q3 = ['join','select','insert','update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$cor_q1 = 80;
$cor_q2 = 'HTML';
$cor_q3 = 'select';
?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($choices_q1 as $choice) { ?>
        <input type="radio" name="q1" value="<?php echo $choice; ?>" />
            <?php echo $choice; ?>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($choices_q2 as $choice) { ?>
        <input type="radio" name="q2" value="<?php echo $choice; ?>" />
            <?php echo $choice; ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($choices_q3 as $choice) { ?>
        <input type="radio" name="q3" value="<?php echo $choice; ?>" />
            <?php echo $choice; ?>
    <?php } ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <br>
    <input type="hidden" name="name" value="<?php echo $name ?>" />
    <input type="hidden" name="cor_q1" value="<?php echo $cor_q1 ?>" />
    <input type="hidden" name="cor_q2" value="<?php echo $cor_q2 ?>" />
    <input type="hidden" name="cor_q3" value="<?php echo $cor_q3 ?>" />
    <input type="submit" value="回答する" />
</form>