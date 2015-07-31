<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>concatenate</title>
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
    <td><div align="right" class="txt24bb_white">Concatenate</div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Concatenate</span>


<br><br></p>

<div class="mutidiarray">
<pre style="text-align:left;margin: 10px 10px 10px 10px;"><span class="hei">
 $str1 = "Tencent";
 $str2 = "Web";
 $str3 = "tutorials.";
 $str4 = $str1 + $str2 + $str3; // 错误这是算术!!
 $str5 = $str1.$str2.$str3; // 这才是concatenate your strings!
 $str6 = $str1." ".$str2." ".$str3; // 适当使用空格!
</span>
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
 $str1 = "Tencent";
 $str2 = "Web";
 $str3 = "tutorials.";
 $str4 = $str1 + $str2 + $str3; // 错误这是算术!!
 $str5 = $str1.$str2.$str3; // 这才是concatenate your strings!
 $str6 = $str1." ".$str2." ".$str3; // 适当使用空格!
	
	
	echo "\$str5 (strlen is ", strlen($str5)."):<br>", $str5, "<br><br>";
	echo "\$str6 (strlen is ", strlen($str6)."):<br>", $str6, "<br><br>";
	
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
