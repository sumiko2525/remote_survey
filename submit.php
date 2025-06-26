<?php
$work_style = htmlspecialchars($_POST['work_style'], ENT_QUOTES, 'UTF-8');
$satisfaction = htmlspecialchars($_POST['satisfaction'], ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>回答ありがとうございます</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>ご回答ありがとうございました！</h1>
        <p><strong>勤務形態：</strong><?= $work_style ?></p>
        <p><strong>コミュニケーション満足度：</strong><?= $satisfaction ?></p>
        <p><strong>リーダーとしての悩み・課題：</strong><br><?= nl2br($comment) ?></p>
    </div>
</body>
</html>