<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<?php
include_once("include/db_connection.php");
mysql_query("set names GBK");
?>
<script type="text/javascript">
function FormFill() {
		

		customersEnterForm.thisFnameField.value = "��";
		customersEnterForm.thisLnameField.value = "����";
		customersEnterForm.thisCompanyField.value = "��Ѷ���ֲ�";
		customersEnterForm.thisAddress1Field.value = "һ��·";
		customersEnterForm.thisAddress2Field.value = "��һ��240";
		customersEnterForm.thisCityField.value = "�ɶ�";
		customersEnterForm.thisState_provinceField.value = "�Ĵ�";
		customersEnterForm.thisCountryField.value = "�й�";
		customersEnterForm.thisPostal_codeField.value = "518000";
		customersEnterForm.thisPhoneField.value = "075500000000";
		customersEnterForm.thisFaxField.value ="075500000000";
			
	}
</script>

<h2>д���¼</h2>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<form name="customersEnterForm" method="POST" action="insert_new.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisCustomer_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �� :  </b> </td>
		<td> <input type="text" name="thisFnameField" size="20" value="">  </td> 
	</tr>
	
	<tr valign="top" height="20">
		<td align="right"> <b> �� :  </b> </td>
		<td> <input type="text" name="thisLnameField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��˾ :  </b> </td>
		<td> <input type="text" name="thisCompanyField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��ַ1 :  </b> </td>
		<td> <input type="text" name="thisAddress1Field" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��ַ2 :  </b> </td>
	  <td> <input type="text" name="thisAddress2Field" size="20" value="">  </td> 
	</tr>
	
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisCityField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ʡ�� :  </b> </td>
		<td> <input type="text" name="thisState_provinceField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisCountryField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �ʱ� :  </b> </td>
		<td> <input type="text" name="thisPostal_codeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �绰 :  </b> </td>
		<td> <input type="text" name="thisPhoneField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisFaxField" size="20" value="">  </td> 
	</tr>
</table>

<p>
  <input type="submit" name="submitEnterCustomersForm" value="�ύ��">
  <input type="reset" name="resetForm" value="�����">
  <input type="button" name="Submit3" value="��д����" onclick="FormFill();  return false;" >
</p>
<p>&nbsp;</p>
<ul>
    <li><div align="left"><a href="enter_new.php">&#28155;&#21152;&#26032;&#32426;&#24405;</a></div>
    </li>
            
</ul>
<p></p>
</form>
