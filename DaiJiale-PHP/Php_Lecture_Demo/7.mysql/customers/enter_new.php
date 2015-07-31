<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<?php
include_once("include/db_connection.php");
mysql_query("set names GBK");
?>
<script type="text/javascript">
function FormFill() {
		

		customersEnterForm.thisFnameField.value = "戴";
		customersEnterForm.thisLnameField.value = "嘉乐";
		customersEnterForm.thisCompanyField.value = "腾讯俱乐部";
		customersEnterForm.thisAddress1Field.value = "一环路";
		customersEnterForm.thisAddress2Field.value = "东一段240";
		customersEnterForm.thisCityField.value = "成都";
		customersEnterForm.thisState_provinceField.value = "四川";
		customersEnterForm.thisCountryField.value = "中国";
		customersEnterForm.thisPostal_codeField.value = "518000";
		customersEnterForm.thisPhoneField.value = "075500000000";
		customersEnterForm.thisFaxField.value ="075500000000";
			
	}
</script>

<h2>写入记录</h2>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<form name="customersEnterForm" method="POST" action="insert_new.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisCustomer_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 姓 :  </b> </td>
		<td> <input type="text" name="thisFnameField" size="20" value="">  </td> 
	</tr>
	
	<tr valign="top" height="20">
		<td align="right"> <b> 名 :  </b> </td>
		<td> <input type="text" name="thisLnameField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 公司 :  </b> </td>
		<td> <input type="text" name="thisCompanyField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 地址1 :  </b> </td>
		<td> <input type="text" name="thisAddress1Field" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 地址2 :  </b> </td>
	  <td> <input type="text" name="thisAddress2Field" size="20" value="">  </td> 
	</tr>
	
	<tr valign="top" height="20">
		<td align="right"> <b> 城市 :  </b> </td>
		<td> <input type="text" name="thisCityField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 省份 :  </b> </td>
		<td> <input type="text" name="thisState_provinceField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 国家 :  </b> </td>
		<td> <input type="text" name="thisCountryField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 邮编 :  </b> </td>
		<td> <input type="text" name="thisPostal_codeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 电话 :  </b> </td>
		<td> <input type="text" name="thisPhoneField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> 传真 :  </b> </td>
		<td> <input type="text" name="thisFaxField" size="20" value="">  </td> 
	</tr>
</table>

<p>
  <input type="submit" name="submitEnterCustomersForm" value="提交表单">
  <input type="reset" name="resetForm" value="重设表单">
  <input type="button" name="Submit3" value="填写例子" onclick="FormFill();  return false;" >
</p>
<p>&nbsp;</p>
<ul>
    <li><div align="left"><a href="enter_new.php">&#28155;&#21152;&#26032;&#32426;&#24405;</a></div>
    </li>
            
</ul>
<p></p>
</form>
