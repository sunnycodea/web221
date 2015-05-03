<?php
// author : grissomshen
include_once('./class_mysql.php');
include_once('./common.php');


$db = conn_db();
$base = 'select szName as name,iThemeID as id from tbTheme order by iThemeID';
$result = sql_to_array($db,$base);

$final_res = Array();
$count = 0;

foreach($result as $key=>$item){
    $final_res[$key + 1] = $item;
}
echo JSON($final_res);

?>

