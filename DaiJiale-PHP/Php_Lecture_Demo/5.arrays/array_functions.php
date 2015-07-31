<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Array Functions</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Array Functions </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Array Functions </span>
<br><br>
<div class="txtbbb11">$array1 = array(4,8,15,16,23,42)</div></p>
</div>
<div align="center">
  <table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black"><p ><span class="txt16b_blue">Sample Output: </span><br>
              <br>


      <?php $array1 = array(4,8,15,16,23,42); ?>
  
 Count: <?php echo count($array1); ?><br />
		Max value: <?php echo max($array1); //查找?><br />
		Min value: <?php echo min($array1); ?><br />
		

    <br />
    Sort: <?php sort($array1); print_r($array1); //按照位置大小索引进行排序?><br />
		Reverse Sort: <?php rsort($array1); print_r($array1); ?><br />
		<br />
        
        Implode: <?php echo $string1 = implode(" * ", $array1); //将数组显示为字符串的阵列?><br />
		    Explode: <?php print_r(explode(" * ", $string1)); ?><br />
		<br />
        
        In array: <?php echo in_array(15, $array1);  //查找返回bool?><br />
              <br>
        
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
