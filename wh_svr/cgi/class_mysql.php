<?php
include_once "./config.php";
include_once "./common.php";

class class_mysql{
    public static $db_src;
    public static $usr_name;
    public static $usr_pwd; 
    public static $db_name;
    public static $db_port;

    private static $mysqli;
    public function __construct($ip = "127.0.0.1",$user = "root",$pwd = "",$db = "test",$port="3306")
    {
        self::$db_src = $ip;
        self::$usr_name = $user;
        self::$usr_pwd = $pwd;
        self::$db_name = $db;
        self::$db_port = $port;
    }

    public static function conn(){
        //connect
        self::$mysqli = new mysqli(self::$db_src , self::$usr_name , self::$usr_pwd , self::$db_name ,self::$db_port);
        if (self::$mysqli->connect_errno) {
            printf("Connect failed: %s\n",self::$mysqli->connect_error);
                exit();
        }
        return self::$mysqli;
    }

    public static function free(){
        self::$mysqli->close();
    }
    
    public static function query($sql)
    {
        $res = self::$mysqli->query($sql);  
        if( $res == FALSE) {
            if (DEBUG)
            {
               printf("Query Failed: %s \n",self::$mysqli->error);
            }
            else echo ("Query Failed!");
            exit();
        } else {
            return $res;
        }
    }
}

function conn_db()
{
    $db_ip = '10.24.248.90';
    $db_user = 'root';
    $db_passwd = '';
    $db_name = 'dbwh';
    $db = new class_mysql($db_ip,$db_user,$db_passwd,$db_name);
    $db->conn();
    return $db;	
}

function sqlres_to_array($res)
{
    $result = array();
    while($line = $res->fetch_array(MYSQLI_ASSOC)) {
        array_push($result, $line);
    }
    return $result;
}

function sql_to_array($db,$sql){
    $res = $db->query($sql);
    $result = sqlres_to_array($res);
    return $result;
}

function sql_to_count_res($db,$sql)
{
    $res = $db->query($sql);
    $result = $res->fetch_array(MYSQLI_NUM);
    if ($result == null) $result = 0;
    return $result;
}

?>


