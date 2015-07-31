<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%"  border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td><div align="right" class="txt24bb_white">Cleaning up Strings </div></td>
  </tr>
</table>
<div align="center">
  <p>
    <br>
      <span class="txt14bb_white">Cleaning up Strings</span>


<br><br></p>


</div>
<table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="tbl_border">
  <tr>
    <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="tbl_gray_wborder">
        <tr>
          <td class="txt14b_black">            <p>              <span class="txt16b_blue">ltrim() or rtrim():</span><br>            
              <br>
              <span class="txt14b_red"><strong>&lt;?php</strong><strong></strong></span><strong><br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red">&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tencent Web tutorials.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot; </span>;<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>echo ltrim($str);</strong></p>
            <p><strong><strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red">&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tencent Web tutorials.  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; </span>;<br>
                <strong>&nbsp;&nbsp;&nbsp;</strong>echo rtrim($str);<br>
              <span class="txt14b_red">?&gt;</span></strong><br>
              <br>            
              <strong class="txt16b_blue">chop():</strong><br>
              <br>
              <br>
              <span class="txt14b_red"><strong>&lt;?php</strong></span><strong><br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red">&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tencent Web tutorials.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot; </span>;<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>echo chop($str);<br>
              <span class="txt14b_red">?&gt;</span></strong><br>
              <br>
              <span class="txt16b_blue">trim():</span><br>
              <br>            
              <br>
              <span class="txt14b_red"><strong>&lt;?php</strong></span><strong><br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>$str =<span class="txt14b_red">&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tencent Web tutorials.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot; </span>;<br>
              <strong>&nbsp;&nbsp;&nbsp;</strong>echo trim($str);<br>
              <span class="txt14b_red">?&gt;</span></strong></p>            
            <p align="center"><span class="txt16b_blue">The Output: </span><br>            
              <?php
					$str ="          Tencent Web tutorials          " ;
					
					echo "ltrim: '", str_replace(" ", "&nbsp;", ltrim($str)), "'<br>";
					
					echo "rtrim: '", str_replace(" ", "&nbsp;", rtrim($str)), "'<br>";
					
					echo "chop: '", str_replace(" ", "&nbsp;", chop($str)), "'<br>";
					
					echo "trim: '", str_replace(" ", "&nbsp;", trim($str)), "'<br>";
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
