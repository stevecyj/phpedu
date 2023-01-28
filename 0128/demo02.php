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

//callback
function hello(string $name, $salary): string
{
    return 'Hello, ' . $name . '， 工資是： ' . $salary;
}

echo hello('teacher Lee', 12345) . '<br>';

//call_user_func(函數，參數列表)
echo call_user_func('hello', 'teacher Kuo', 56789) . '<br>';

$params = ['teacher Chung', 888888];
echo call_user_func_array('hello', $params);
