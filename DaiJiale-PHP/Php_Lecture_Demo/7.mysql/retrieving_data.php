<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<br />
<?php

	$user = "daijiale";
	$passwd = "123456";
	
	
	$connect = mysql_connect('localhost', $user, $passwd)
	   or die('Could not connect: ' . mysql_error());
	   mysql_query("SET NAMES 'GB2312'",$connect);
	   //ע�������ܲ���
	echo '<b>��һ��:</b>�ɹ���������! <BR>';
	
	$db = 'samples';
	mysql_select_db($db) or die('Could not select database ('.$db.') because of : '.mysql_error());
	echo '<b>�ڶ���:</b> �ɹ����ӵ� ('.$db.') ���ݿ�!<BR>';
	



	//ϰ����ϲ����SQL�����query������װ
	$query = 'SELECT * FROM customers';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	//mysql_query(sql��䣬���ݿ�����) ���� SELECT��SHOW��EXPLAIN �� DESCRIBE ��䷵��һ����Դ��ʶ���������ѯִ�в���ȷ�򷵻� FALSE��
//�����������͵� SQL ��䣬mysql_query() ��ִ�гɹ�ʱ���� TRUE������ʱ���� FALSE��
	
	
	echo "<br><br><b>��ȡ����...</b><br>";
	echo "<table border='1' width='3000'>\n";
	
	$count = 0;
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	   //MYSQL_ASSOC��ʾλ�����������ݳɶԳ���
	   echo "\t<tr>\n";
	   foreach ($line as $col_value) {
	   	//ѭ�����������ʽҪ�μ�
		   echo "\t\t<td>$col_value</td>\n";
	   }
	   $count++;
	   echo "\t</tr>\n";
	}
	
	echo "</table>\n";
	
	if ($count < 1) {
		echo "<br><br>�����δ���ּ�¼.<br><br>";
	} else {
		echo "<br><br>�������".$count."�м�¼.<br><br>";
	}
	
	
	mysql_free_result($result);
	
	
	mysql_close($connect);
//�ƺ�������

?>
