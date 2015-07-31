<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Built-in PHP  Arrays </div></td>
  </tr>
</table>
<div align="center"><br>
  <span class="txt14bb_white"><br>
  There are many built-in arrays that you can work with. </span><br>
  <span class="txt14bb_white">  ($_SERVER, $_ENV, $GLOBALS, $ _POST, $ _GET, $ _COOKIE, $ _SESSION, $_REQUEST)</span><br>  
  <br>
</div>
<table width="650" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt12_black">  
           <p align="center"><span class="txt16b_blue">Sample Output: </span></p>
         
		  <?php
		   foreach($_SERVER as $key =>$value)
			
			{
			 echo "<b class=\"\">$key: </b>$value<BR>";
			}
		?>
    
		<br>
          <br>
          </p>          </td>
        </tr>
    </table></td>
  </tr>
</table>


</body>
</html>
