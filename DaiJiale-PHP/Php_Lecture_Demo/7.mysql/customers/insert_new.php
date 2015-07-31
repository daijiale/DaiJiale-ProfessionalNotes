<?php  echo $_SERVER['SCRIPT_NAME']."<BR>"; ?>
<?php
include_once("include/db_connection.php");
?>

<?php
mysql_query("set names GBK");
	
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

$sqlQuery = "INSERT INTO customers (customer_id , fname , lname , company , address1 , address2 ,  city , state_province , country , postal_code , phone , fax )
	VALUES ('$thisCustomer_id' , '$thisFname' , '$thisLname' , '$thisCompany' , '$thisAddress1' , '$thisAddress2' ,  '$thisCity' , '$thisState_province' , '$thisCountry' , '$thisPostal_code' , '$thisPhone' , '$thisFax' )";
$result = MYSQL_QUERY($sqlQuery);


?>


<br>一个新纪录被添加进入数据库.<br>
<br>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<table>
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><?php echo $thisCustomer_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>姓 : </b></td>
	<td><?php echo $thisFname; ?></td>
</tr>

<tr height="30">
	<td align="right"><b>名 : </b></td>
	<td><?php echo $thisLname; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>公司 : </b></td>
	<td><?php echo $thisCompany; ?></td>
</tr>

<tr height="30">
	<td align="right"><b>地址1 : </b></td>
	<td><?php echo $thisAddress1; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>地址2 : </b></td>
	<td><?php echo $thisAddress2; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>城市 : </b></td>
	<td><?php echo $thisCity; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>省份 : </b></td>
	<td><?php echo $thisState_province; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>国家 : </b></td>
	<td><?php echo $thisCountry; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>邮编 : </b></td>
	<td><?php echo $thisPostal_code; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>电话 : </b></td>
	<td><?php echo $thisPhone; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>传真 : </b></td>
	<td><?php echo $thisFax; ?></td>
</tr>
</table>
<p>&nbsp;</p>
<ul>
  <li><div align="left"><a href="enter_new.php">&#28155;&#21152;&#26032;&#32426;&#24405;</a></div>
  </li>
            
</ul>
<p></p>
