<?php
define('CURSCRIPT', 'forumdisplay');
      $dbHostname = "localhost";
      $dbUsername = "daijiale";
      $dbPassword = "123456";
      $dbName     = "samples";      
       
             
      $dblink = MYSQL_CONNECT($dbHostname, $dbUsername, $dbPassword) OR DIE("�������ݿ�ʧ��");       

     
      mysql_select_db($dbName) or die( "Unable to select database ".$dbName); 

?>