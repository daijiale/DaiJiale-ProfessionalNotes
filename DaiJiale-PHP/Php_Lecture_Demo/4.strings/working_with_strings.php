<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.mutidiarray {
	width: 600px;
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
    <td><div align="right" class="txt24bb_white">Working with Strings </div></td>
  </tr>
</table>
<br>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Working with Strings</span>


<br><br></p>

<div class="mutidiarray" align="left">
<div class="hei" style="text-align:left;margin: 10px 10px 10px 10px;">

$str = 'Hello World!';<br>
$str2 = '你好世界!';<br>
$str3 = 'The old lady was glad to be back at the block of flats where she lived. Her shopping had tired her and her basket ad grown heavier with every step of the way home. In the life her thoughts were on lunch and a good rest .';<br>
</div>
</div>
</div>
<br>

<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black"><p align="center"><span class="txt16b_blue">Output our Sample Strings:</span><br>
              <p><?php
				$str = 'Hello World!';
				$str2 = '你好世界!';
				$str3 = 'The old lady was glad to be back at the block of flats where she lived. Her shopping had tired her and her basket ad grown heavier with every step of the way home. In the life her thoughts were on lunch and a good rest .';
 
			  echo "\$str (strlen is ", strlen($str)."):<br>", $str, "<br><br>";
				echo "\$str2 (strlen is ", strlen($str2)."):<br>", $str2, "<br><br>";
			  echo "\$str3 (strlen is ", strlen($str3)."):<br>", $str3, "<br><br>";
				
				?></p>
              <br>
          </p></td>
        </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
                
</p>
</body>
</html>
