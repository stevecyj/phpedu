<?php

namespace _0128;
//flow control
$age = 18;
if ($age >= 18) {
    echo '已成年，可以觀看恐怖片' . '<br>';
} else {
    echo '未成年，請在陪同下觀看' . '<br>';
}

echo $age >= 18 ? '已成年，可以觀看恐怖片' . '<br>' : '未成年，請在陪同下觀看' . '<br>';