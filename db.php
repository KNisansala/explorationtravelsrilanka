<?php

class DB {

public $databseHost = "localhost";
public $databseName = "safarilanka";
public $databseUser = "root";
public $databsePassword = "";


//public $databseHost = "kelum818.ipagemysql.com";
//public $databseName = "safarilanka";
//public $databseUser = "safarilanka";
//public $databsePassword = "SAF#8718@12288";


public function __construct() {
mysql_connect($this->databseHost, $this->databseUser, $this->databsePassword) or die("Invalid host  or user details");
mysql_select_db($this->databseName) or die("Unable to select database");
}

public function readQuery($query) {

$result = mysql_query($query) or die(mysql_error());
return $result;
}

}

function dd($data) {
var_dump($data);
exit();
}

function url(){
$url = "http://localhost/eco-travel/";
return $url;
}