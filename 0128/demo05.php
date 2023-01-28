<?php
//array traversal
namespace _0128;
$colors = ['red', 'green', 'blue'];
printf('<pre>%s</pre>', print_r($colors, true));

$user = ['id' => 5, 'name' => 'JOJO', 'score' => 88];
printf('<pre>%s</pre>', print_r($user, true));
echo $user['name'] . '<br>';
echo '<hr>';

foreach ($colors as $color) {
    echo $color . '<br>';
}

foreach ($colors as $key => $color) {
    printf('[%s] => %s <br>', $key, $color);
}

echo '<hr>';
//二維陣列
//gender: 0 male, 1 female
$users = [
    0 => ['id' => 5, 'name' => 'JOJO', 'gender' => 0, 'score' => 88],
    1 => ['id' => 6, 'name' => 'MOMO', 'gender' => 1, 'score' => 99],
    2 => ['id' => 7, 'name' => 'DODO', 'gender' => 0, 'score' => 77],
];
printf('<pre>%s</pre>', print_r($users, true));

//foreach + table
$table = '<table border="1" width="400" cellspacing="0" cellpadding="3" align="center">';
$table .= '<caption>用戶資料表</caption>';
$table .= '<thead bgcolor="#ccc"><tr><th>ID</th><th>用戶名</th><th>性別</th><th>年齡</th></tr></thead>';
$table .= '<tbody align="center">';
//foreach ()
foreach ($users as $user) {
//    print_r($user);
    $table .= '<tr>';
    $table .= "<td>{$user['id']}</td>";
    $table .= "<td>{$user['name']}</td>";
    $table .= '<td>' . ($user['gender'] ? '女' : '男') . '</td>';
    $table .= "<td>{$user['score']}</td>";
    $table .= '</tr>';
}
$table .= '</tbody>';
$table .= '</table>';
echo $table;