<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<?php
include_once("include/db_connection.php");

$thisCustomer_id = $_REQUEST['customer_idField'];

$sql = "SELECT * FROM customers WHERE customer_id = '$thisCustomer_id'";
mysql_query("SET NAMES 'GB2312'");

$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

�Ҳ�����¼ !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCustomer_id = MYSQL_RESULT($result,$i,"customer_id");
	$thisFname = MYSQL_RESULT($result,$i,"fname");
	$thisLname = MYSQL_RESULT($result,$i,"lname");
	$thisCompany = MYSQL_RESULT($result,$i,"company");
	$thisAddress1 = MYSQL_RESULT($result,$i,"address1");
	$thisAddress2 = MYSQL_RESULT($result,$i,"address2");
	$thisCity = MYSQL_RESULT($result,$i,"city");
	$thisState_province = MYSQL_RESULT($result,$i,"state_province");
	$thisCountry = MYSQL_RESULT($result,$i,"country");
	$thisPostal_code = MYSQL_RESULT($result,$i,"postal_code");
	$thisPhone = MYSQL_RESULT($result,$i,"phone");
	$thisFax = MYSQL_RESULT($result,$i,"fax");

}
?>

<h2>���¼�¼</h2>
<form name="customersUpdateForm" method="POST" action="update.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisCustomer_idField" size="20" value="<?php echo $thisCustomer_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �� :  </b> </td>
	  <td> <input type="text" name="thisFnameField" size="20" value="<?php echo $thisFname; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �� :  </b> </td>
	  <td> <input type="text" name="thisLnameField" size="20" value="<?php echo $thisLname; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��˾ :  </b> </td>
		<td> <input type="text" name="thisCompanyField" size="20" value="<?php echo $thisCompany; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��ַ1 :  </b> </td>
		<td> <input type="text" name="thisAddress1Field" size="20" value="<?php echo $thisAddress1; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ��ַ2 :  </b> </td>
		<td> <input type="text" name="thisAddress2Field" size="20" value="<?php echo $thisAddress2; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisCityField" size="20" value="<?php echo $thisCity; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ʡ�� :  </b> </td>
		<td> <input type="text" name="thisState_provinceField" size="20" value="<?php echo $thisState_province; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisCountryField" size="20" value="<?php echo $thisCountry; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �ʱ� :  </b> </td>
		<td> <input type="text" name="thisPostal_codeField" size="20" value="<?php echo $thisPostal_code; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> �绰 :  </b> </td>
		<td> <input type="text" name="thisPhoneField" size="20" value="<?php echo $thisPhone; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ���� :  </b> </td>
		<td> <input type="text" name="thisFaxField" size="20" value="<?php echo $thisFax; ?>">  </td> 
	</tr>
</table>

<p>
  <input type="submit" name="submitUpdateCustomersForm" value="���¼�¼">
  <input type="reset" name="resetForm" value="�����">
  </p>
<p>&nbsp;</p>
<ul>
  <li><div align="left"><a href="enter_new.php">&#28155;&#21152;&#26032;&#32426;&#24405;</a></div>
  </li>
              <li>
                <div align="left"><a href="list.php">&#25152;&#26377;&#35760;&#24405;&#21015;&#34920;</a></div>
  </li>
              <li>
                <div align="left"><a href="search_form.php">&#25628;&#32034;&#35760;&#24405;</a></div>
  </li>
</ul>
<p></p>
</form>
