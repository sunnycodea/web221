<?php
include_once('./class_mysql.php');
include_once('./common.php');

$iRouteID = check_get('iRouteID','die');

$db = conn_db();
$base = 'select * from tbDaysInfo where iRouteID = %d';
$sql = sprintf($base,$iRouteID);
$result = sql_to_array($db,$sql);
echo JSON($result);

?>

