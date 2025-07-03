<?php
// フォームから送られてきた POST データを受け取り、HTMLで安全に表示するためにエスケープする
$work_style = htmlspecialchars($_POST['work_style'], ENT_QUOTES, 'UTF-8');       // 勤務形態
$satisfaction = htmlspecialchars($_POST['satisfaction'], ENT_QUOTES, 'UTF-8');   // 満足度
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');             // 自由記述コメント
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>回答ありがとうございます</title>
    <!-- CSSを読み込む -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>ご回答ありがとうございました！</h1>

        <!-- 入力内容を確認表示する -->
        <p><strong>勤務形態：</strong><?= $work_style ?></p>

        <p><strong>コミュニケーション満足度：</strong><?= $satisfaction ?></p>

        <p><strong>リーダーとしての悩み・課題：</strong><br>
            <?= nl2br($comment) ?> <!-- nl2br() は改行コードを <br> に変換してくれる -->
        </p>
    </div>
</body>
</html>