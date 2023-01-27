<?php
$username = 'JOJO';
echo $username . '<br>';
var_dump($username);
echo '<br>';
$username = 'momo';
echo $username . '<hr>';
//----------
echo '<h2>function</h2>';
echo '<h3>getUsername</h3>';
function getUsername(string $username): string
{
    return 'Hello ' . $username;
}

echo getUsername('GOGO') . '<br>';
echo '<hr>';

//參數不足
function getTotal(float $price, int $num = 1): float
{
    return $price * $num;
}

echo '總金額：' . getTotal(45) . ' 元<br>';


$getTotal = function (float $price, int $num = 1): float {
    return $price * $num;
};
echo "總金額：{$getTotal(45)}  元<br>";

echo '<hr>';
//參數過多
$sum = function (...$args): float|int {
//    var_dump($args);
    return array_sum($args);
};
$param = [4, 5, 6, 7, 8];
echo $sum(...$param) . '<br>';

//filter,return array
$arr = [33, 22, 4, 6, 53, 9, 64];
function getItems($arr, $value): array
{
    return array_filter($arr, function ($item) use ($value) {
        return $item > $value;
    });
}

echo '<pre>' . print_r(getItems($arr, 30), true) . '</pre>';
echo '[' . implode(',', getItems($arr, 30)) . ']';
