<?php
// author : grissomshen
include_once('./class_mysql.php');
include_once('./common.php');

$iStart = check_get('iStart','die');
$iEnd = check_get('iEnd','die');

$db = conn_db();
$base = 'select * from tbTheme order by iThemeID limit %d,%d';
$sql = sprintf($base,$iStart,$iEnd);
$result = sql_to_array($db,$sql);
echo JSON($result);



?>

