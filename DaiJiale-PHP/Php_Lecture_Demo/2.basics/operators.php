<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>operators</title>
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
    <td><div align="right" class="txt24bb_white">operators</div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">operators</span>


<br><br></p>

<div class="mutidiarray">
<pre  style="text-align:left;margin: 10px 10px 10px 10px;"><span class="hei">
 也可称为起始Array
 
 $SOME_GUY=Array();

 $SOME_GUY=Array("1975-01-05","30","5'11");
 
 $SOME_GUY[0]="1975-01-05";
 $SOME_GUY[1]="30";
 $SOME_GUY[2]="5'11";
 
 OR
 
 $SOME_GUY["birthday"]="1975-01-05";
 $SOME_GUY["age"]="30";
 $SOME_GUY["height"]="5'11";
</span>
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


$sum=0;
for($i=1;$i <= 100; $i++) {
	$sum+=$i;
	$sum_array[$i]=$sum;
}

print "<pre>";
print_r($sum_array);
print "</pre>";

print "<br><Br>".$sum_array[44];

?>
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
