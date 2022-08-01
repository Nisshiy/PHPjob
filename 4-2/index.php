<?php
require_once("getData.php");

$get_data = new getData();

$userdata = $get_data->getUserData();
$postdata = $get_data->getPostData();

$category = array("1"=>"食事","2"=>"旅行");
$cat_key = array_keys($category);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>記事一覧</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <div class="box1">
                <img src="1599315827_logo.png">
            </div>
            <div class="box2">
                <div class="box2-1">
                    <div class="header-text"><?php printf("ようこそ %s%s さん",$userdata["last_name"],$userdata["first_name"]); ?></div>
                </div>
                <div class="box2-2">
                    <div class="header-text"><?php printf("最終ログイン日： %s",$userdata["last_login"]); ?></div>
                </div>
            </div>
        </div>

        <div class="main">
            <table>
                <thead>
                    <th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>登校日</th>
                </thead>
                <tbody>
                    <?php foreach ($postdata as $post) { ?>
                        <tr>
                            <?php foreach (['id','title','category_no','comment','created'] as $val) { ?>
                                <td>
                                    <?php
                                    if($val=="category_no"){
                                        if(in_array($post[$val],$cat_key)){
                                            printf($category[$post[$val]]);
                                        }else{
                                            printf("その他");
                                        }
                                    }else{
                                            printf($post[$val]);
                                    }
                                    ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="footer">
            <div class="box3">Y&I group.inc</div>
        </div>
    </body>
</html>