<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>


<?php
	
	$user = "daijiale";
	$passwd = "123456";
	
	
	$connect = mysql_connect('localhost', $user, $passwd)
	   or die('connect fail: ' . mysql_error());
	echo '<BR><b>´÷¼ÎÀÖFirst Step:</b>connect local successful! <BR>';

	
	$db = 'samples';
	mysql_select_db($db) or die('Could not select database ('.$db.') because of : '.mysql_error());
	echo '<b>Second Step:</b> have successfully connectted ('.$db.') database!<BR>';
	
	
	
	mysql_close($connect);
?>
