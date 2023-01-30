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
