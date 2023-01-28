<?php

$age = 20;
$price = 88.88;
$username = 'admin';
$isDel = true;

$arr = [20, 'admin', true];

$obj = new class(88000) {
    public float $salary;

    public function __construct(float $salary)
    {
        $this->salary = $salary;
    }
};
echo gettype($obj) . '<br>';
echo $obj->salary . '<br>';

//null
$x = null;
$x = 123;
//unset($x);
echo gettype($x) . '<br>';

//資源
$f = fopen('demo01.php', 'r');
echo gettype($f) . '<br>';