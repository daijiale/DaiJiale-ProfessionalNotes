<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>multidimensional array</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.mutidiarray {
	width: 650px;
	background-color: #EBEBEB;
	border: 1px solid #CCCCCC;
	
}
-->
</style>
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">multidimensional array </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">multidimensional array</span>


<br><br></p>

<div class="mutidiarray">
<pre style="text-align:left;margin: 10px 10px 10px 10px;"><span class="hei" style="font-size: 14px;">
//SINGLE DIMENSIONAL ARRAY 单维数组

$user1=Array("name"=>"Mike","address"=>"Oakville, Ontario, Canada","age"=>"30");
$user2=Array("name"=>"John","address"=>"Worrytown, Oklahoma, USA","age"=>"43");
$user3=Array("name"=>"Billy","address"=>"Moscow, Russia","age"=>"14");

//COMPARABLE MULTIDIMENSIONAL ARRAY 多维数组

$users=Array(
Array("name"=>"Mike","address"=>"Oakville, Ontario, Canada","age"=>"30"),
Array("name"=>"John","address"=>"Worrytown, Oklahoma, USA","age"=>"43"),
Array("name"=>"Billy","address"=>"Moscow, Russia","age"=>"14")
);


$users [0][$name]
</span></pre></div>
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


$user1=Array("name"=>"Mike","address"=>"Oakville, Ontario, Canada","age"=>"30");
$user2=Array("name"=>"John","address"=>"Worrytown, Oklahoma, USA","age"=>"43");
$user3=Array("name"=>"Billy","address"=>"Moscow, Russia","age"=>"14");



$users=Array(
Array("name"=>"Mike","address"=>"Oakville, Ontario, Canada","age"=>"30"),
Array("name"=>"John","address"=>"Worrytown, Oklahoma, USA","age"=>"43"),
Array("name"=>"Billy","address"=>"Moscow, Russia","age"=>"14")
);


print "<pre>";print_r($users);print "</pre>";?>

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
