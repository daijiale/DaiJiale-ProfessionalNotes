<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.mutidiarray {
	width: 500px;
	background-color: #EBEBEB;
	border: 1px solid #CCCCCC;
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Numbers</div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Numbers</span>


<br><br></p>

<div class="mutidiarray">
<pre  style="text-align:left;margin: 10px 10px 10px 10px;">
&lt;?php

$var1 = 3;
$var2 = 4;

?&gt;
</pre>
</div>
</div>
<br><br>
<div align="center">
  <table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black" align="left"><p class="txt16b_blue">
        
        <p align="center"><span class="txt16b_blue">Sample Output: </span></p>


		<?php
			$var1 = 3;
			$var2 = 4;
		?>
		
		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
		<br />
		
		
		+=: <?php $var2 += 4; echo $var2; ?><br />
		-=: <?php $var2 -= 4; echo $var2; ?><br />
		*=: <?php $var2 *= 3; echo $var2; ?><br />
		/=: <?php $var2 /= 4; echo $var2; ?><br />
		<br />
		
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?>
              


              </p>
            </td>
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
</div>
</body>
</html>
