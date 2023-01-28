<?php

namespace _0128;
//loop
$colors = ['red', 'green', 'blue'];
echo '陣列長度： ' . count($colors) . '<br>';
$list = '<ul style="border: 1px solid chocolate">';
$i = 0;
while ($i < count($colors)) {
    $list .= "<li>{$colors[$i]}</li>";
    $i++;
}
$list .= '</ul>';
echo $list;
echo '<hr>';

//for loop
$list1 = '<ul style="border: 1px solid chocolate">';
for ($i = 0; $i < count($colors); $i++) {

    $list1 .= "<li>{$colors[$i]}</li>";
}
$list1 .= '</ul>';
echo $list1;
