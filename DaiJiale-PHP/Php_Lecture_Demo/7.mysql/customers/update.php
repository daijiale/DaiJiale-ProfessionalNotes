<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<?php
include_once("include/db_connection.php");
?>
<?php
	mysql_query("SET NAMES 'GB2312'");
	
	$thisCustomer_id = addslashes($_REQUEST['thisCustomer_idField']);
	$thisFname = addslashes($_REQUEST['thisFnameField']);
	$thisLname = addslashes($_REQUEST['thisLnameField']);
	$thisCompany = addslashes($_REQUEST['thisCompanyField']);
	$thisAddress1 = addslashes($_REQUEST['thisAddress1Field']);
	$thisAddress2 = addslashes($_REQUEST['thisAddress2Field']);
	$thisCity = addslashes($_REQUEST['thisCityField']);
	$thisState_province = addslashes($_REQUEST['thisState_provinceField']);
	$thisCountry = addslashes($_REQUEST['thisCountryField']);
	$thisPostal_code = addslashes($_REQUEST['thisPostal_codeField']);
	$thisPhone = addslashes($_REQUEST['thisPhoneField']);
	$thisFax = addslashes($_REQUEST['thisFaxField']);

?>
<?php
$sql = "UPDATE customers SET customer_id = '$thisCustomer_id' , fname = '$thisFname' , lname = '$thisLname' , company = '$thisCompany' ,  address1 = '$thisAddress1' , address2 = '$thisAddress2' ,  city = '$thisCity' , state_province = '$thisState_province' , country = '$thisCountry' , postal_code = '$thisPostal_code' , phone = '$thisPhone' , fax = '$thisFax'
	WHERE customer_id = '$thisCustomer_id'";
$result = MYSQL_QUERY($sql);

?>
<br>��¼�Ѿ����� <br><br>

<table>
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><?php echo $thisCustomer_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>�� : </b></td>
	<td><?php echo $thisFname; ?></td>
</tr>

<tr height="30">
	<td align="right"><b>�� : </b></td>
	<td><?php echo $thisLname; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>��˾ : </b></td>
	<td><?php echo $thisCompany; ?></td>
</tr>

<tr height="30">
	<td align="right"><b>��ַ1 : </b></td>
	<td><?php echo $thisAddress1; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>��ַ2 : </b></td>
	<td><?php echo $thisAddress2; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>���� : </b></td>
	<td><?php echo $thisCity; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ʡ�� : </b></td>
	<td><?php echo $thisState_province; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>���� : </b></td>
	<td><?php echo $thisCountry; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>�ʱ� : </b></td>
	<td><?php echo $thisPostal_code; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>�绰 : </b></td>
	<td><?php echo $thisPhone; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>���� : </b></td>
	<td><?php echo $thisFax; ?></td>
</tr>
</table>
<p><a href="list.php">���ؼ�¼�б�</a></p>
<p>  
</p>
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
