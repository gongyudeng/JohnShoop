<?php 
header('content-type:text/html;charset=utf-8');
require_once 'checkForm.class.php';
require_once '../configs/config.php';
require_once '../com/connect.php';
$arr = $_POST;
$arr['face'] = mt_rand(1,5);



