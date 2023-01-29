<?php

namespace _0129;

use mysql_xdevapi\BaseResult;

define('USER_NAME', 'admin');
const EMAIL = 'admin@php.com';
echo USER_NAME . ', ' . EMAIL . '<hr>';

function hello(): string
{
    return sprintf('Hello, %s, %s', USER_NAME, EMAIL);
}

echo hello() . '<hr>';

echo USER_NAME . '<br>';
echo constant('USER_NAME') . '<hr>';

define('', 'nodejs中文網');
echo constant('') . '<hr>';

echo 'php 版本： ' . PHP_VERSION . '<br>';
echo '作業系統： ' . PHP_OS . '<hr>';

echo '當前行數： ' . __LINE__ . '<br>';
echo '當前文件： ' . __FILE__ . '<br>';
echo '當前目錄： ' . __DIR__ . '<br>';