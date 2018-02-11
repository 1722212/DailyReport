<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// TCPDF読込み
require_once dirname(__FILE__).'/FPDI-2.0.1/src/Fpdi.php';
// FPDF読込み
require_once dirname(__FILE__).'/tc-lib-pdf-develop/src/Tcpdf.php';

// FPDFのインスタンス生成
$pdf = new Fpdi();
// TCPDFフォントのインスタンス化
$font = new Tcpdf();
// 余白の設定
$pdf->SetMargins(0, 0);
// 自動改ページをしない
$pdf->SetAutoPageBreak(FALSE);
// ヘッダー、フッターを使用しない
$pdf->setPrintHeader(FALSE);
$pdf->setPrintFooter(FALSE);
// １ページ目を作成
$pdf->AddPage();
// フォントの設定
$fontJP = $font->addTTfont('日本語フォント', '', '',32);
$pdf->SetFont($fontJP, '', 10);
// 既存のテンプレート用PDFを読込む
$pdf->setSourceFile('./resource/doc/照会連絡票PDF.pdf');
// 既存テンプレートの２ページ目をテンプレートに設定する
$page = $pdf->importPage(2);
$pdf->useTemplate($page);
// 既存テンプレートに文字列を書き込む
$pdf->Text(100, 100, '書込み内容');
// PDFをブラウザに出力
$pdf->Output('sample.pdf', 'I');

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>PDF操作</title>
    </head>
    <body>
        PDFの操作<br>
        １．PDFの作成<br>
        ２．PDFの表示<br>
        ３．PDFのマージ
    </body>
</html>
