<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Find  and Replace</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb1312">
<link href="include/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Find  and Replace </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Find  and Replace</span>


<br><br></p>


</div>
<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black">            <p>              <span class="txt16b_blue">str_replace:</span><br>
            <br><br>
          </p>
            
            <p>&nbsp;</p>
            <p align="center"><span class="txt16b_blue">Replace String Output:</span></p>
            <p align="left">
			<?php
					
				
					$str = "There are approcimately 3 other subjects to release.";
					$nums = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
					$newstr = str_replace($nums, "X", $str);
					echo $str, "<br>";
					echo $newstr, "<br><br><br><br>";
					//思想很重要，在以前后PHP操作数据库中会有体现
				
				?>            
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
<p>&nbsp;</p>
</body>
</html>
