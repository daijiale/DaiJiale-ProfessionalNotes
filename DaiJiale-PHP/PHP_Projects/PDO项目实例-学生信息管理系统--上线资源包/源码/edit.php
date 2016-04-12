<html>
	<head><title>学生管理信息</title></head>
	<body>
		<center>
			<?php include("menu.php");
			//1.连接数据库
			try{
				$pdo = new PDO("mysql:host=localhost;dbname=jikexueyuan;","root","");
			}catch(PDOException $e){
				die("数据库连接失败".$e->getMessage());
			}
			//2.拼SQL语句，取信息
			$sql = "select * from stu where id=".$_GET['id'];
			$stmt = $pdo->query($sql);
			if($stmt->rowCount() > 0){
				$stu = $stmt->fetch(PDO::FETCH_ASSOC);  //解析数据
			}else{
				die("没要有修改的数据");
			}
			
			?>
			<h3>修改学生信息</h3>
			<form action="action.php?action=edit" method="post">
				<input type="hidden" name="id" value="<?php echo $stu['id'];?>" />
				<table>
					<tr>
						<td>姓名</td>
						<td><input type="text" name="name" value="<?php echo $stu['name']?>"/></td>
					</tr>
					<tr>
						<td>性别</td>
						<td>
							<input type="radio" name="sex" value="m"  <?php echo ($stu['sex'] == "m") ? "checked" : ""?>/> 男
							<input type="radio" name="sex" value="w" <?php echo ($stu['sex'] == "w") ? "checked" : ""?>/> 女
						</td>
					</tr>
					<tr>
						<td>年龄</td>
						<td><input type="text" name="age" value="<?php echo $stu['age']?>"/></td>
					</tr>
					<tr>
						<td>班级</td>
						<td><input type="text" name="classid" value="<?php echo $stu['classid']?>"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="submit" value="修改" />
							<input type="reset" value="重置" />
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>