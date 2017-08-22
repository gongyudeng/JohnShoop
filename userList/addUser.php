<!DOCTYPE html>
<html>
<head>
	<title>添加用户</title>
</head>
<body>
	<form method="post" name="adduserForm" action="do.php">
		<table border="1" cellspacing="0" cellpadding="3" bgcolor="#ABCDEF" width="50%">
			<tr>
				<td width="30%">用户名&nbsp;&nbsp;<span style="color: red;">*</span>：</td>
				<td><input type="text" name="username" placeholder="请输入用户名" required="required"></td>
			</tr>
			<tr>
				<td>邮箱&nbsp;&nbsp;<span style="color: red;">*</span>：</td>
				<td><input type="email" name="email" placeholder="请输入邮箱" required="required"></td>
			</tr>
			<tr>
				<td>个人博客&nbsp;&nbsp;：</td>
				<td><input type="url" name="url" placeholder="请输入地址"></td>
			</tr>
			<tr>
				<td>留言内容&nbsp;&nbsp;<span style="color: red;">*</span>：</td>
				<td><textarea name="content" cols="50" rows="5" placeholder="请输入留言内容" required="required"></textarea></td>
			</tr>
			<tr>
				<td>操作&nbsp;&nbsp;：</td>
				<td>&nbsp;<input type="submit" name="sub" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="ret" value="重置"></td>
			</tr>
		</table>
	</form>
</body>
</html>