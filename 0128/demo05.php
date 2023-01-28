<?php
//array traversal
namespace _0128;
$colors = ['red', 'green', 'blue'];
printf('<pre>%s</pre>', print_r($colors, true));

$user = ['id' => 5, 'name' => 'JOJO', 'score' => 88];
printf('<pre>%s</pre>', print_r($user, true));
echo $user['name'] . '<br>';