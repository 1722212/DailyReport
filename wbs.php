<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// インポート
require_once './database_conf.php';
require_once './h.php';

/* DBに接続 */
try{
    // DB接続
    $db = new PDO($dsn, $dbUser, $dbPass);
    // プリペアードステートメントのエミュレーションを無効にする
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    // 例外をスロー
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "接続できませんでした　理由：".h($e->getMessage());
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/css/layout.css" rel="stylesheet">
        <script src="resource/bootstrap/js/bootstrap.min.js"></script>
        <title>WBS画面</title>
    </head>
    <body>
        <div id="header">
            <div class="col-md-4"><h3>日報アプリ</h3></div>            
            <div class="col-md-6"></div>
            <div class="col-md-2"></div>
        </div>
        <div id="navigation">
            <ul class="nav nav-tabs">
                <li><a href="index.php">トップ画面</a></li>
                <li><a href="inputPlan.php">予定入力画面</a></li>
                <li><a href="">実績入力画面</a></li>
                <li><a href="">日報検索画面</a></li>
                <li><a href="searchFile.php">ファイル検索画面</a></li>
                <li class="active"><a href="">WBS画面</a></li>
            </ul></div>
        <div id="content">
            <h3>◇WBS</h3>
            ファイルアップロード
            <form method="post" action="uploadComplete.php" enctype="multipart/form-data">

            <input type="file" name="uploadfile"></p>
            <p><input type="submit" value="送信する"></p>
            </form>
        </div>
        <div id="footer"></div>
    </body>
</html>
