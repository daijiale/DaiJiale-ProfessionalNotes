<%@page import="com.jkxy.model.stuInfo"%>
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

<title>My JSP 'modifyOneStu.jsp' starting page</title>

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
	<jsp:useBean id="stuSer" class="com.jkxy.service.stuInfoService"></jsp:useBean>
	<%
		//拿到迭代器里的用户数据ID，“id”是从“修改”按钮的超链接中传递过来的
		int id = Integer.parseInt(request.getParameter("id"));
		out.print(id); 
		stuInfo stu = stuSer.queryStubyID(id);
		
		out.print(stu.getStuNo()); 
	%>
	<form action="First_modifyOneStu_result.jsp" method="post">
		<table bgColor="#c0c0c0">
	
			<tr>
				<td align="center" bgcolor=green colspan=2><font color=white>学生信息录入</font></td>
			</tr>
			<tr>
				<td>真实姓名：</td>
				<td><input type="text" size=20 name="stuName"
					value="<%=stu.getStuName()%>"></td>
			</tr>
			<tr>
				<td>性别</td>
				<td><input type="radio" name="stuSex" <%if (stu.getStuSex() == 1) {%>
					checked <%}%> value="1">男&nbsp;&nbsp; <input type="radio"
					name="stuSex" <%if (stu.getStuSex() == 0) {%> checked <%}%> value="0">女</td>
			</tr>
			<tr>
				<td>职位</td>
				<td><input type="text" name="stuPosition" value="<%=stu.getStuPosition()%>"
					size=20></td>
			</tr>
			<tr>
				<td>所在部门：</td>
				<td><select name="stuDepartment">
						<option <%if (stu.getStuDepartment().equals("体育部")) {%> selected <%}%>>体育部</option>
						<option <%if (stu.getStuDepartment().equals("文艺部")) {%> selected <%}%>>文艺部</option>
						<option <%if (stu.getStuDepartment().equals("学习部")) {%> selected <%}%>>学习部</option>
						<option <%if (stu.getStuDepartment().equals("组织部")) {%> selected <%}%>>组织部</option>
						<option <%if (stu.getStuDepartment().equals("主席团")) {%> selected <%}%>>主席团</option>
						<option <%if (stu.getStuDepartment().equals("英语部")) {%> selected <%}%>>英语部</option>
				</select></td>
			</tr>
			
			<tr>
				<td>所学专业：</td>
				<td><select name="stuMajor">
						<option <%if (stu.getStuMajor().equals("计算机科学与技术")) {%> selected <%}%>>计算机科学与技术</option>
						<option <%if (stu.getStuMajor().equals("通信工程")) {%> selected <%}%>>通信工程</option>
						<option <%if (stu.getStuMajor().equals("电气工程")) {%> selected <%}%>>电气工程</option>
				</select></td>
			</tr>
			
			<tr>
				<td>所在班级：</td>
				<td><input type="text" size=20 name="stuGrade"
					value="<%=stu.getStuGrade()%>"></td>
			</tr>
			
			<tr>
				<td>电话：</td>
				<td><input type="text" size=50 name="stuPhoneNo"
					value="<%=stu.getStuPhoneNo()%>"></td>
			</tr>
			
			<tr>
				<td>入会时间：</td>
				<td><input type="text" size=50 name="stuStaTime"
					value="<%=stu.getStuStaTime()%>"></td>
			</tr>
			<tr valign="top">
				<td>参与过的活动</td>
				<td><textarea rows=3 cols=20 name="stuCase"><%=stu.getStuCase() %></textarea></td>
			</tr>
			
			<!-- 设置隐藏控件，将所要更改的数据ID号提交给server -->
			<tr>
				<td align="center" colspan="2"><input type="hidden" name="id" value="<%=stu.getStuNo()%>"/><input type="submit" value="提交">&nbsp;&nbsp;
					<input type="reset" value="重置"></td>
			</tr>
		</table>

	</form>

</body>
</html>
