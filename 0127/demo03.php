<?php
//命名空間，想像是一個目錄
namespace _0127;

//echo '<h2 style="color: chocolate">我想吃鍋貼</h2>' . '<br>';
//echo 123 . '<br>';
echo 'Hello,' . implode(', ', [1, 2, 3]) . '<hr>';

//開發階段用
var_dump(10, 'google', [1, 2, 3], true);
echo '<hr>';

//格式化
$arr = ['red', 'green', 'blue'];
var_dump($arr);
echo '<br>';
print_r($arr);
echo '<br>';
echo '<pre>' . print_r($arr, true) . '</pre>';
echo '<br>';

//printf(模版，資料)
printf('<pre> %s </pre>', print_r($arr, true));
echo '<br>';

$item = ['電腦', 8000, 1];
echo '<span style="color: chocolate">printf</span>' . '<br>';
printf('品名：%s，單價：%d，數量：%d<br>', $item[0], $item[1], $item[2]);
echo '<span style="color: chocolate">vprintf</span>' . '<br>';
vprintf('品名：%s，單價：%d，數量：%d<br>', $item);
echo '<span style="color: chocolate">vsprintf</span>' . '<br>';
echo vsprintf('品名：%s，單價：%d，數量：%d<br>', $item);

$params = ['mysql', 'localhost', 'phpedu', '3306', 'utf8'];
/**
 * template
 * 'mysql:host=localhost;dbname=phpedu;port=3306;charset=utf8'
 */
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
echo $dsn . '<br>';

$db = new \PDO($dsn, 'phpedu', 'phpedu');
if ($db) {
    echo 'connect success!';
} else {
    echo 'connect failed';
}