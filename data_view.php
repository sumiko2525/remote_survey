<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート集計結果</title>
    <!-- CSSファイルを読み込む -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>アンケート集計結果</h1>

        <!-- テーブルで集計データを表示する -->
        <table>
            <thead>
                <tr>
                    <th>勤務形態</th>      <!-- 1列目のヘッダー -->
                    <th>満足度</th>        <!-- 2列目のヘッダー -->
                    <th>コメント</th>      <!-- 3列目のヘッダー -->
                    <th>日時</th>          <!-- 4列目のヘッダー -->
                </tr>
            </thead>
            <tbody>
                <?php
                // data.csv ファイルを読み込みモードで開く
                if (($file = fopen("data.csv", "r")) !== false) {

                    // 1行ずつ読み込んで処理を繰り返す
                    while (($data = fgetcsv($file)) !== false) {

                        // 表の1行を開始
                        echo "<tr>";

                        // 各項目（勤務形態、満足度、コメント、日時）をテーブルのセルとして表示
                        foreach ($data as $item) {
                            // セキュリティ対策：特殊文字を無害化して表示
                            echo "<td>" . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . "</td>";
                        }

                        // 表の1行を終了
                        echo "</tr>";
                    }

                    // ファイルを閉じる
                    fclose($file);
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
