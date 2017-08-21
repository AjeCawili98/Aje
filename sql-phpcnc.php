<?php
$username ="root";
$password="";
$database="traffic";
$host = "localhost";
mysql_connect('localhost',$username,$password);
/*$host = "sql208.byethost32.com";
$database = "b32_14278725_ipsionline";
$username = "b32_14278725";
$password = "thesis2014";
mysql_connect($host,$username,$password);*/
@mysql_select_db($database) or die ("DB Connection code is wrong or something is out of place.");

