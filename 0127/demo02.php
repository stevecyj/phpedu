<?php
$username = 'JOJO';
echo $username . '<br>';
var_dump($username);
echo '<br>';
$username = 'momo';
echo $username . '<hr>';
//----------
function getUsername(string $username): string
{
    return 'Hello ' . $username;
}
echo getUsername('GOGO').'<br>';