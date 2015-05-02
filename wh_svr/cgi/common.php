<?php


//----------------helpful functions---------------------
function check_val($val)
{
    if(is_string($val)) $val = addslashes($val);
    elseif (is_numeric($val)) $val = intval($val);
    return  $val;
}
function check_post($parm,$init_val)
{
    if (isset($_POST[$parm]))
    {
        $val = $_POST[$parm];
        return check_val($val);
    }
    elseif( $init_val == 'die') die("error: Can't Find POST parm : $parm"); 
    else return $init_val;
}

function check_get($parm,$init_val)
{
    if (isset($_GET[$parm])) 
    {
        $val = $_GET[$parm];
        return check_val($val);
    }
    elseif( $init_val == 'die') die("error: Can't find GET parm :  $parm"); 
    else return $init_val;
}

function check_cookie($parm,$init_val)
{
    if (isset($_COOKIE[$parm])) 
    {
        $val = $_COOKIE[$parm];
        return check_val($val);
    }
    elseif( $init_val == 'die') die("error: Can't find COOKIE :  $parm"); 
    else return $init_val;
}


function check_session($parm,$init_val)
{
    if (isset($_SESSION[$parm])) 
    {
        $val = $_SESSION[$parm];
        return check_val($val);
    }
    elseif( $init_val == 'die') die("error: Can't find SESSION :  $parm"); 
    else return $init_val;
}

//计算今天是一年中的第几天
function count_day($time1) {
    $day_count=date("z",strtotime($time1));
    return $day_count;
}

function get_url_filename()
{
    $url = $_SERVER['PHP_SELF']; 
    $arrays = explode("/",$url);
    $filename = end ($arrays);
    return $filename;
}

function get_game_name($game_id){
    if($game_id <= 0)
        return "Choose Game";
    else
    {
        $db = conn_db("web");
        $sql = sprintf(get_game_name,$game_id);
        $res = $db->query($sql);
        $result = sqlres_to_array($res);
        return $result[0]["game_name"];
    }
}


function curl_get($url,$path)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_TIMEOUT,200);
    curl_setopt($ch, CURLOPT_HEADER,FALSE);
    curl_setopt($ch, CURLOPT_NOBODY,FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
    $content = curl_exec($ch);

    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($httpcode != 200){
        return "error"; 
    }else{
        $ret = file_put_contents($path,$content);
        if($ret != FALSE){
            return $path;
        }
        else{
            return "error";
        }
    }
}


// json utf-8 recursive
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 100) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}


function urlencode_key($array)
{
    foreach($array as $key=>$num)
    {
        $new_key = urlencode($key);
        if($new_key != $key)
        {
            $array[$new_key] = $array[$key];
            unset($array[$key]);
        }
    }
    return $array;
}


function JSON($array) {
    arrayRecursive($array, 'urlencode', true);
    $json = json_encode($array);
    return urldecode($json);
}

//encode change functions
function EndianChange($data){
    if(strlen($data) != 8){
        return "error";

    } 
    $temp = $data;
    for($i=0;$i<4;$i++){
        $temp[2*$i] = $data[6-2*$i];
        $temp[2*$i+1] = $data[7-2*$i];

    }
    return intval($temp, 16);

}

function EndianChangeLong($data){
    if(strlen($data) != 16){
        return "error";

    } 
    $temp = $data;
    for($i=0;$i<8;$i++){
        $temp[2*$i] = $data[14-2*$i];
        $temp[2*$i+1] = $data[15-2*$i];

    }
    return intval($temp, 16);

}

function getIP() 
{ 
    static $realip; 
    if (isset($_SERVER)){ 
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){ 
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) { 
            $realip = $_SERVER["HTTP_CLIENT_IP"]; 
        } else if (isset($_SERVER["REMOTE_ADDR"])) { 
            $realip = $_SERVER["REMOTE_ADDR"]; 
        } 
        else
            $realip = "null";
    } else { 
        if (getenv("HTTP_X_FORWARDED_FOR")){ 
            $realip = getenv("HTTP_X_FORWARDED_FOR"); 
        } else if (getenv("HTTP_CLIENT_IP")) { 
            $realip = getenv("HTTP_CLIENT_IP"); 
        } else { 
            $realip = getenv("REMOTE_ADDR"); 
        }  
    } 
    return $realip; 
} 


//JS base functions
function js_var($var_name,$var_value)
{
    echo "<script language=javascript> var $var_name = $var_value;</script>";
    return;
}
function js_alert($info)
{
    echo "<script language=javascript>alert ('$info');</script>"; 
    return;
}

function js_header($url)
{
    echo "<script language=javascript>";  
    echo "window.location.href='$url'";  
    echo "</script>";
    return;
}


?>
