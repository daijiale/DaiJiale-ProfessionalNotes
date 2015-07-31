<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Switch</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.mutidiarray {
	width: 500px;
	color: #3333CC;
	background-color: #EBEBEB;
	border: 1px solid #CCCCCC;	
}
-->
</style>
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Switch</div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Switch</span>


<br><br></p>

<div class="mutidiarray">
<pre style="text-align:left;margin: 10px 10px 10px 30px;">
&lt;?php
	$a = 2;
switch ($a) {
	case 0: 
		echo "a equals 0";
		break;
	case 1: 
		echo "a equals 1";
		break;
	case 2: 
		echo "a equals 2";
		break;
	default:
		echo "a is not 0, 1, or 2";
		break;
}
?&gt;
</pre>
</div>
</div>
<br><br>
<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black">
            <p align="center"><span class="txt16b_blue">Sample Output: </span><br>
              <br>

		<?php 
		
			
			$a = 2;
		
			switch ($a) {
				case 0: 
					echo "a equals 0";
					break;
				case 1: 
					echo "a equals 1";
					break;
				case 2: 
					echo "a equals 2";
					break;
				default:
					echo "a is not 0, 1, or 2";
					break;
			}
		?>

	<br>
              <br>
          </p></td>
        </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
