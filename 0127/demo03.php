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