<?php
include_once('./class_mysql.php');
include_once('./common.php');

$iThemeID = check_get('iThemeID','die');

$db = conn_db();
$base = 'select * from tbRoute where iThemeID = %d';
$sql = sprintf($base,$iThemeID);
$result = sql_to_array($db,$sql);
echo JSON($result);

?>

