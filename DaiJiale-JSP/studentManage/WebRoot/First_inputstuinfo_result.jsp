<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<base href="<%=basePath%>">

<title>My JSP 'inputStuInfo_result.jsp' starting page</title>

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
	<%
		request.setCharacterEncoding("utf-8");
	%>
	<jsp:useBean id="stuInfo" class="com.jkxy.model.stuInfo"></jsp:useBean>
	<jsp:setProperty property="*" name="stuInfo" />
	<jsp:useBean id="stuServer" class="com.jkxy.service.stuInfoService"></jsp:useBean>

	<%
		/* out.print(stuInfo.getStuName());
		
		out.print(stuInfo.getStuCase());
		out.print(stuInfo.getStuSex());
		out.print(stuInfo.getStuDepartment()); 
		测试log
		 */
	%>

	<%
		if (stuServer.addStu(stuInfo))
			out.print("提交成功!请点击左侧菜单，查看数据更新");
		else
			out.print("提交失败!请重新检查所提交的表单信息");
	%>

</body>
</html>
