<?php

namespace _0129;

$colors = ['red', 'green', 'blue'];
echo implode(', ', $colors) . '<hr>';

$link = 'mysql:dbname=phpedu;root;root';
list($dsn, $username, $pw) = explode(';', $link);
printf('dsn=%s<br> username=%s<br> pw=%s<br>', $dsn, $username, $pw);
echo '<hr>';
$format = 'dsn=%s<br> username=%s<br> pw=%s<br>';
$db = explode(';', $link);
vprintf($format, $db);
echo '<hr>';

// 查詢
$str = 'pneumonoultramicroscopicsilicovolcanoconiosis';
echo substr($str, 0, 10) . '<br>';
echo substr($str, -3, 3) . '<hr>';

$img = 'banner.png';
echo strstr($img, '.') . '<br>';
echo ltrim(strstr($img, '.'), '.') . '<br>';
echo strstr($img, '.', true) . '<hr>';

echo strpos($str, 'p', 1) . '<hr>';

$class = '\admin\controller\User';
echo str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';