<?php

namespace _0128;

$username = 'JOJO';

$myName = $username;

printf('$username = %s | $myName= %s <br>', $username, $myName);

$yourName = &$username;

$yourName = 'Naruto';

printf('$username = %s | $yourName= %s <br>', $username, $yourName);
