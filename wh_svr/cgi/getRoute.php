<?php
include_once('./class_mysql.php');
include_once('./common.php');

$iThemeID = check_get('iThemeID','die');

$db = conn_db();

$base = 'select iRouteID,szName as title,szDesc as brief,iMoney as price from tbRoute where iThemeID = %d';
$sql = sprintf($base,$iThemeID);
$result = sql_to_array($db,$sql);

$final_res = Array();
$count = 0;

foreach($result as $key=>$item){
    $final_res[$key + 1] = $item;
}

echo JSON($final_res);


?>

