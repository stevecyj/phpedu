<?php

namespace _0129;
$name = 'JOJO';
function hello(): string
{
//    global $name;
//    return 'Hello, ' . $name;
    return 'Hello, ' . $GLOBALS['name'];
}

echo hello() . '<br>';

$name = 'MOMO';
$hello1 = function () use ($name): string {
    return 'Hello, ' . $name;
};
echo $hello1() . '<br>';

$name = 'DODO';
$hello = fn() => 'Hello, ' . $name;
echo $hello() . '<br>';

$name = 'COCO';
$hello1 = function ($name): string {
    return 'Hello, ' . $name;
};
echo $hello1($name) . '<br>';
