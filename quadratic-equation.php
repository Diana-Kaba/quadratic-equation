<?php
$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);
$d = $b ** 2 - (4 * $a * $c);

$start = <<<EOD
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Розв'язання квадратного рівняння</title>
</head>
<body>
<h2>3.4 Розв'язання квадратного рівняння</h2>
<p>Рівняння: $a * x^2 + $b * x + $c = 0</p>
EOD;
echo $start;

if ($d < 0) {
    echo "<p>Відповідь: ∅.</p>";
}
elseif ($d === 0) {
    $x = -$b / (2 * $a);
    echo "<p>Відповідь: x = $x.</p>";
}
elseif($d > 0) {
    $x1 = round((-$b + sqrt($d)) / (2 * $a));
    $x2 = round((-$b - sqrt($d)) / (2 * $a));
    echo "<p>Відповідь: x1 = $x1; x2 = $x2.</p>";
}

$end = <<<EOD
</body>
</html>
EOD;
echo $end;
