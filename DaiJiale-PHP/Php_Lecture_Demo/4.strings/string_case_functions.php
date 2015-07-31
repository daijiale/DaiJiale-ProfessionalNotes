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
    <td><div align="right" class="txt24bb_white">String Case Functions </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">String Case Functions</span>


<br><br></p>


</div>
<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black">            <p><strong class="txt16b_blue">strtoupper() or strtolower()</strong>:<br>
                <span class="txt12_black">&#20840;&#37096;&#21464;&#20026;&#22823;&#20889;&#25110;&#23567;&#20889;. </span><br>            
              <br>
                <span class="txt14b_red"><strong>&lt;?php</strong></span><strong><br>
&nbsp;&nbsp;&nbsp;$str = <span class="txt14b_red">&quot;cao peng video tutorials.&quot;</span>;<br>
&nbsp;&nbsp;&nbsp;echo strtoupper($str);<br>
&nbsp;&nbsp;&nbsp;<strong>echo strtolower($str);</strong><br>
<span class="txt14b_red">?&gt;</span></strong><br>
              <br>
              <span class="txt16b_blue">ucfirst()</span>:<br>
              <span class="txt12_black">&#21482;&#26377;&#39318;&#23383;&#27597;&#22823;&#20889;.</span><br>            
              <br>
              <span class="txt14b_red"><strong>&lt;?php</strong><strong></strong></span><strong><br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red">&quot;cao peng video tutorials. &quot; </span>;<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>echo ucfirst($str);<br>
              <span class="txt14b_red">?&gt;</span></strong><br>            
              <br>
              <span class="txt16b_blue">ucwords()</span>:<br>
              <span class="txt12_black">&#27599;&#20010;&#21333;&#35789;&#39318;&#23383;&#27597;&#22823;&#20889;.</span><br>            
              <br>
              <span class="txt14b_red"><strong>&lt;?php</strong></span><strong><br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red"> &quot;cao peng video tutorials. &quot;</span>;<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str_caps = ucwords($str);<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>echo <strong>$str_cap</strong>s;<br>
              <span class="txt14b_red">?&gt;</span></strong></p>
            <p align="center"><span class="txt16b_blue">The Output: </span><br>            
              <?php
				$str = "cao peng video tutorials.";
				echo strtoupper($str), "<br>", strtolower($str), "<br><br>";
				
				$str ="cao peng video tutorials.";
				echo ucfirst($str), "<br>";
				
				$str = "cao peng video tutorials.";
				$str_caps = ucwords($str);
				echo $str_caps, "<br>";
			?>            
              <br>            
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
</body>
</html>
