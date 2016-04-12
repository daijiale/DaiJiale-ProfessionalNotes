<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'modifyOneStu_result.jsp' starting page</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
    <body>
    <%request.setCharacterEncoding("utf-8"); %>
    
   <jsp:useBean id="stu" class="com.jkxy.model.stuInfo"></jsp:useBean>
  	<jsp:setProperty property="*" name="stu"/>
    <jsp:useBean id="stuServer" class="com.jkxy.service.stuInfoService"></jsp:useBean>
    
  <%  
 
  //获取到用户提交的ID数据，即用户选择
   int id = Integer.parseInt(request.getParameter("id"));
   stu.setStuNo(id);
   
   //测试数据
   /* out.print(stu.getStuNo());
   out.print(stu.getStuName());
   out.print(stu.getStuDepartment());
   out.print(stu.getStuMajor());  */

   
  
  //测试数据

   %> 
   <%
   
   if(stuServer.updateStu(stu))
   out.print("修改成功，请点击左侧菜单，重新查看干部信息！");
   else
   out.print("修改失败，请重新检查修改信息");
    %>
  </body>
</html>
