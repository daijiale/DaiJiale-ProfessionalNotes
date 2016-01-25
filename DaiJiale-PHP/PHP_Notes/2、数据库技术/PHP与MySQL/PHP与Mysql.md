# PHP与MySQL学习笔记

## PHP内置MySQL函数

**逻辑思路：**

```
连接MySQL服务器->选择数据库->if（字符集不一致）->设置字符集
连接MySQL服务器->选择数据库 ->else->传递SQL命令->查->处理结果集
连接MySQL服务器->选择数据库 ->else->传递SQL命令->增删改->分析处理结果
				    
```

### mysql_connect()--建立数据库连接

```php
  header(“Content-type:text/html;charset=utf-8”);//为了不出现乱码
<?php
 if($con = mysql_connect('localhost','root','123')){//1、当连接成功的时候，返回mysql连接标识符 。 2、当连接失败的时候返回false。
 echo“连接成功”；
 }else{
 	echo"连接失败"；
 }
?>
```

### mysql_close()--关闭数据库连接

```php
  header(“Content-type:text/html;charset=utf-8”);//为了不出现乱码
<?php
 if($con = mysql_connect('localhost','root','123')){//1、当连接成功的时候，返回mysql连接标识符 。 2、当连接失败的时候返回false。
 echo“连接成功”；
 }else{
 	echo"连接失败"； 	
 }
 mysql_close($con);
?>
```

### mysql_select_db()--选择数据库

```php
  header(“Content-type:text/html;charset=utf-8”);//为了不出现乱码
<?php
 if($con = mysql_connect('localhost','root','123')){//1、当连接成功的时候，返回mysql连接标识符 。 2、当连接失败的时候返回false。
 echo“连接成功”；
 }else{
 	echo"连接失败"； 	
 }
 if(mysql_select_db('code')){//数据库名为code
echo" select success";
}else{
echo"select failed ";
}
```

### mysql_query()--选择数据库

```php
mysql_query("set names 'utf8' ");//传递SQL语句给数据库执行
if(mysql_query('insert into test(name) values('abc')')){
echo"succcess";
}else{
echo mysql_error();//打印出错误日志
echo"failed";
}
```

### 执行MySQL查询

```php
<?php
//连接数据库
mysql_connect('127.0.0.1', 'code1', '');
mysql_select_db('code1');
mysql_query("set names 'utf8'");
//在这里进行数据查询
$res = mysql_query('select * from user');//对于查询类语句会返回一个资源句柄（resource），可以通过该资源获取查询结果集中的数据
$row = mysql_fetch_array($res);
var_dump($row);
```

**注意：**
默认的，PHP使用最近的数据库连接执行查询，但如果存在多个连接的情况，则可以通过参数指令从那个连接中进行查询。

```php
$link1 = mysql_connect('127.0.0.1', 'code1', '');
$link2 = mysql_connect('127.0.0.1', 'code1', '', true); //开启一个新的连接
$res = mysql_query('select * from user limit 1', $link1); //从第一个连接中查询数据
```

### 插入新数据到MySQL里

通常数据都是存储在变量或者数组中，因此sql语句需要先进行字符串拼接得到。
```php
$name = '李四';
$age = 18;
$class = '高三一班';
$sql = "insert into user(name, age, class) values('$name', '$age', '$class')";
mysql_query($sql); //执行插入语句
$uid = mysql_insert_id();
echo $uid;
```

在mysql中，执行插入语句以后，可以得到自增的主键id,通过PHP的mysql_insert_id函数可以获取该id。这个id的作用非常大，通常可以用来判断是否插入成功，或者作为关联ID进行其他的数据操作。





















## PHP支持哪些数据库

PHP通过安装扩展库的方式来实现数据库操作，主要支持的数据库有：MsSQL、MySQL、Sybase、Db2、Oracle、Access、PostgreSQL等。

验证MySQL扩展已安装：

```php
if(function_exists('mysql_connect')){
	echo'Mysql扩展已经安装'；
}
```
### 数据库扩展

PHP中一个数据库可能有一个或者多个扩展，其中既有官方的，也有第三方提供的。像MySQL常用的扩展有原生的mysql库，也可以使用增强版的mysqli扩展，还可以使用PDO进行连接与操作。
不同的扩展提供基本相近的操作方法，不同的是可能具备一些新特性，以及操作性能可能会有所不同。

**mysql扩展进行数据库连接的方法：**

```php
 $link = mysql_connect('mysql_host','mysql_user','mysql_password');
```
**mysqli扩展：**

```php
 $link ＝ mysqli_connect('mysql_host','mysql_user','mysql_password');
```
**PDO扩展：**

```php
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';
$dbh = new PDO($dsn, $user, $password);
```

**从远程数据库服务器取出一串Array:**

```php
<?php
$link = mysql_connect('127.0.0.1', 'code1', '') or die('数据库连接失败');
mysql_select_db('code1');
mysql_query("set names 'utf8'");
$result = mysql_query('select * from user limit 1');
$row = mysql_fetch_assoc($result);
print_r($row);
?>

//运行结果：
//Array
//(
//    [id] => 21960325
//    [name] => 李四
//    [age] => 18
//    [class] => 高三一班
//    [status] => 0
//    [create_time] => 2015-12-11 13:03:07
//)
```




