<?php 
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC'); 
require_once 'configs/config.php';
require_once 'com/connect.php';
require_once 'com/comment.class.php';
$arr = array();
$res = Comment::validate($arr);
//var_dump($res);
if($res){
	$sql = "insert into comments(username,email,url,content,pubTime,face) values(?,?,?,?,?,?);";
	$mysqli_stmt = $mysqli->prepare($sql);
	$arr['pubTime'] = date('Y-m-d H:i:s');
	$mysqli_stmt->bind_param('sssssi',$arr['username'],$arr['email'],$arr['url'],$arr['content'],$arr['pubTime'],$arr['face']);
	$mysqli_stmt->execute();
	$comment = new Comment($arr);
	echo json_encode(array('status'=>1,'html'=>$comment->output()));
}else{
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}
