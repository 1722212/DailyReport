<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// インポート
require_once dirname(__FILE__).'/database_conf.php';
require_once dirname(__FILE__).'/h.php';

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
/* PDF表示 */
//// ライブラリの読み込み
//require_once './resource/vendor/zendframework/zendpdf/library/ZendPdf/PdfDocument.php';
//
//$loader = new Zend/Loader/StandardAutoloader(array('autoregister_zf' => true));
//$loader->registerNamespace('ZendPdf', "ZendPdf");
//$loader->register();
//
//use ZendPdf\PdfDocument;
//
//// pdfを読み込む
//$pdf = ZendPdf::load('resource/doc/日報アプリPDF.pdf');
//
//// ブラウザに表示
//header ('Content-Type:', 'application/pdf');
//header ('Content-Disposition:', 'inline;');
//echo $pdf->render();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/css/layout.css" rel="stylesheet">
        <script src="resource/bootstrap/js/bootstrap.min.js"></script>
        <title>ファイル検索画面</title>
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
                <li class="active"><a href="searchFile.php">ファイル検索画面</a></li>
                <li><a href="">WBS画面</a></li>
            </ul></div>
        <div id="content">
            <h3>ファイル検索画面</h3>
            <h3>以下、照会連絡票</h3><br>
            １枚目<br>
            <object data="resource/doc/画面レイアウト2.pdf" type="application/pdf" width="800px" height="500px">
            <p><b>表示されない時の表示</b>: <a href="pdf.pdf">PDF をダウンロード</a>.</p>
            </object><br>
            ２枚目<br>
            <object data="resource/doc/照会連絡票PDF.pdf" type="application/pdf" width="800px" height="500px">
            <p><b>表示されない時の表示</b>: <a href="pdf.pdf">PDF をダウンロード</a>.</p>
            </object>
        </div>
        <div id="footer"></div>
    </body>
</html>
