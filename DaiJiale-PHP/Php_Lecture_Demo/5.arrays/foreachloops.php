<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>foreachloops</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="include/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">foreachloops </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">foreachloops </span>
<br><br>
<div class="txtbbb11">foreach($array as $value)
<br>statement;
<br><br>$ages = array(4, 8, 15, 16, 23, 42)
</div></p>
</div>
<div align="center">
  <table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black"><p>
         <p align="center"><span class="txt16b_blue">Sample Output: </span></p>
         <?php
		$ages = array(4, 8, 15, 16, 23, 42);
	?>

	<?php
		
		foreach($ages as $age) {
			echo $age . ", ";
		}
	?>
	<br /><br /><br />


    <?php
		
		foreach($ages as $position => $age) {
			echo $position . ": " . $age . "<br />";
		}
	?>
	<br /><br /><br /><?php
		
		$prices = array("Brand New Computer"=>1000, 
		"Brand New PSP"=>200, 
		"Learning PHP+MYSQL" => "priceless");
		
		foreach($prices as $key => $value) {
			if (is_int($value)) {
				echo $key . ": $" . $value . "<br />";
			} else {
				echo $key . ": " . $value . "<br />";
			}
		}
	?>
<br />
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
