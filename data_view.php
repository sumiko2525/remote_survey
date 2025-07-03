<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート集計結果</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>アンケート集計結果</h1>
        <table>
            <thead>
                <tr>
                    <th>勤務形態</th>
                    <th>満足度</th>
                    <th>コメント</th>
                    <th>日時</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (($file = fopen("data.csv", "r")) !== false) {
                    while (($data = fgetcsv($file)) !== false) {
                        echo "<tr>";
                        foreach ($data as $item) {
                            echo "<td>" . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . "</td>";
                        }
                        echo "</tr>";
                    }
                    fclose($file);
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>