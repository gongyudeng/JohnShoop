<?php 
	$mysqli = new mysqli('localhost','root','','test');
	if($mysqli->connect_errno){
		die('Conncet Error:'.$mysqli->connect_error);
	}else{
		$mysqli->set_charset('utf8');
	}
	$sql=<<<EOF
		select username,email,content,pubTime from comments;
EOF;
	$mysqli_result = $mysqli->query($sql);
	if($mysqli_result && $mysqli_result->num_rows>0){
		while ($row = $mysqli_result->fetch_assoc()) {
			$rows[]=$row;
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>显示用户列表</title>
</head>
<style type="text/css">
	.clo{background-color:white;}
</style>
<body>
<h2>用户列表-<a href="addUser.php">添加内容</a></h2>
<table border="1" cellpadding="2" cellspacing="0" bgcolor="#ABCDEF" width="70%">
	<tr align="center" >
		<td>序号</td>
		<td>用户名</td>
		<td>邮箱</td>
		<td>留言内容</td>
		<td>留言时间</td>
		<td>操作</td>
	</tr>
  	<?php $i=1; foreach ($rows as $val):?>
		<tr class="clo">
		<td><?php echo $i ?></td>
		<td><?php echo $val['username'] ?></td>
		<td><?php echo $val['email'] ?></td>
		<td><?php echo $val['content'] ?></td>
		<td><?php echo $val['pubTime'] ?></td>
		<td><a href="#">更新</a>|<a href="#">删除</a></td>
	</tr>
  	<?php $i++;endforeach; ?>
</table>
</body>
</html>