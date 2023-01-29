<?php

namespace _0129;
$domain = 'https://google.com';
$str = ' 網站名稱： \n\r $domain';
echo $str . '<br>';

$str = <<< 'TEXT'
<header>
<nav>
<a href="">頁頁</a>
</nav>
</header>
TEXT;
echo $str . '<br>';

$site = " 網站名稱： \n\r $domain";
echo $site . '<hr>';

$tpl = <<<"MYTPL"
<ul style="display: inline-grid;border: 1px solid;">
<li style="color: brown;">蕃茄</li>
<li>$domain</li>
</ul>
MYTPL;
echo $tpl;