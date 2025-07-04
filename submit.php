<?php
// フォームからの入力を受け取ってエスケープ
$work_style = htmlspecialchars($_POST['work_style'], ENT_QUOTES, 'UTF-8');
$satisfaction = htmlspecialchars($_POST['satisfaction'], ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');

// 📌 CSVファイルに保存する処理
$file = fopen("data.csv", "a"); // "a" は追記モード
if ($file) {
    // 日時も一緒に保存
    fputcsv($file, [$work_style, $satisfaction, $comment, date("Y-m-d H:i:s")]);
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>回答ありがとうございました</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>ご回答ありがとうございました！</h1>
        <p><strong>勤務形態：</strong><?= $work_style ?></p>
        <p><strong>コミュニケーション満足度：</strong><?= $satisfaction ?></p>
        <p><strong>リーダーとしての悩み・課題：</strong><br><?= nl2br($comment) ?></p>

        <p style="margin-top: 30px;"><a href="data_view.php">▶ 集計結果を見る</a></p>
    </div>
</body>
</html>