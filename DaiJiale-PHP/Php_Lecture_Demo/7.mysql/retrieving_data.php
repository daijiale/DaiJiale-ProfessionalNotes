<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<br />
<?php

	$user = "daijiale";
	$passwd = "123456";
	
	
	$connect = mysql_connect('localhost', $user, $passwd)
	   or die('Could not connect: ' . mysql_error());
	   mysql_query("SET NAMES 'GB2312'",$connect);
	   //注意乱码规避操作
	echo '<b>第一步:</b>成功建立连接! <BR>';
	
	$db = 'samples';
	mysql_select_db($db) or die('Could not select database ('.$db.') because of : '.mysql_error());
	echo '<b>第二步:</b> 成功连接到 ('.$db.') 数据库!<BR>';
	



	//习惯上喜欢将SQL语句用query变量封装
	$query = 'SELECT * FROM customers';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	//mysql_query(sql语句，数据库链接) 仅对 SELECT，SHOW，EXPLAIN 或 DESCRIBE 语句返回一个资源标识符，如果查询执行不正确则返回 FALSE。
//对于其它类型的 SQL 语句，mysql_query() 在执行成功时返回 TRUE，出错时返回 FALSE。
	
	
	echo "<br><br><b>获取数据...</b><br>";
	echo "<table border='1' width='3000'>\n";
	
	$count = 0;
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	   //MYSQL_ASSOC表示位置索引和数据成对呈现
	   echo "\t<tr>\n";
	   foreach ($line as $col_value) {
	   	//循环数组遍历方式要牢记
		   echo "\t\t<td>$col_value</td>\n";
	   }
	   $count++;
	   echo "\t</tr>\n";
	}
	
	echo "</table>\n";
	
	if ($count < 1) {
		echo "<br><br>表格中未发现记录.<br><br>";
	} else {
		echo "<br><br>表格中有".$count."行记录.<br><br>";
	}
	
	
	mysql_free_result($result);
	
	
	mysql_close($connect);
//善后工作做好

?>
