<?php 
	require_once 'configs/config.php';
	require_once 'com/connect.php';
	require_once 'com/comment.class.php';
	$sql = "select username,email,url,content,pubTime,face from comments order by pubTime desc";
	$result = $mysqli->query($sql);
	if($result && $result->num_rows>0){
		while ($rows = $result->fetch_assoc()) {
			$comments[] = new Comment($rows);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>评论</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script type="text/javascript" src="script/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="script/comment.js"></script>
</head>
<body>
	<h1>无刷新评论</h1>
	<div id="main">		
		<div id="addCommentContainer">
			<form id="addCommentForm" method="post" action="">
				<div>
					<label for="username">昵称</label>&nbsp;<span style="color: red">*</span>
					<input type="text" name="username" id="username" required="required" placeholder="请输入您的昵称" />
					<label for="face">选择头像</label>&nbsp;<span style="color: red">*</span>
					<div id="face">
						<input type="radio" name="face" checked="checked" value="1"/><img src="img/1.jpg" alt="" width="50" height="50" />&nbsp;&nbsp;&nbsp;
						<input type="radio" name="face"  value="2"/><img src="img/2.jpg" alt="" width="60" height="50" />&nbsp;&nbsp;&nbsp;
						<input type="radio" name="face"  value="3"/><img src="img/3.jpg" alt="" width="60" height="50" />&nbsp;&nbsp;&nbsp;
						<input type="radio" name="face"  value="3"/><img src="img/4.jpg" alt="" width="60" height="50" />&nbsp;&nbsp;&nbsp;
						<input type="radio" name="face"  value="4"/><img src="img/5.jpg" alt="" width="60" height="50" />&nbsp;&nbsp;&nbsp;
					</div>
					<label for="email">邮箱</label>&nbsp;<span style="color: red">*</span>
					<input type="email" name="email" id="email" required="required" placeholder="请输入合法邮箱" />
					<label for="url">个人博客</label>
					<input type="url" name="url" id="url"/>
					<label for="content">评论内容</label>&nbsp;<span style="color: red">*</span>
					<textarea name="content" id="content" cols="20" rows="5" required="required" placeholder="请输入您的评论"></textarea>
					<input type="submit" id="submit" value="发布评论" />
				</div>
			</form>
		</div>
		<?php 
			foreach ($comments as $value) {
				echo $value->output();
			}
		?>
	</div>
</body>
</html>
