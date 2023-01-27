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