<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'main_left.jsp' starting page</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  <jsp:include page="islogin.jsp"></jsp:include>
  <body>
   <a href="First_inputstuinfo.jsp" target="main_right">录入学生干部信息</a><br>
    <a href="First_displaystuinfo.jsp" target="main_right">查看学生干部信息</a><br>
     <a href="First_modifystuinfo.jsp" target="main_right">修改学生干部信息</a><br>
       <a href="First_deletestuinfo.jsp" target="main_right">删除学生干部信息</a><br>
        <a href="First_exit.jsp" target="_top">退出</a><br>
  </body>
</html>
