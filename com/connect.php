<?php 
$mysqli = @new mysqli(DB_HOST,DB_USERNAME,DB_PWD,DB_DBNAME);
if ($mysqli->connect_errno){
	echo "Connect Error:".$mysqli->connect_error;
}else{
	$mysqli->set_charset(DB_CHARSET);
}
?>