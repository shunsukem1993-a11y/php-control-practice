<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績判定システム</title>
</head>
<body>
        <h1>成績判定システム</h1>
echo "<h2>成績判定システム</h2>";
echo "<h3>【個別成績】</h3>";
<?php
# 生徒成績の定義
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

# 成績表示の定義
if ($scoe >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

#生徒の成績表示
foreach ($students as $student) {
    echo $student["name"].":".$student["score"]."点 - 評価".$grade."<br>";
}

#合否判定の定義
$pass_count = 0;
$fail_count = 0;

foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}

# 平均点の計算
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);

echo "<h3>【統計情報】</h3>";
echo "合格者数：".$pass_count."人<br>";
echo "不合格者数：".$fail_count."人<br>";
echo "平均点：".$average."点<br>";
<?php>
</body>
</html>