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

<title>My JSP 'inputstuinfo.jsp' starting page</title>

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
	<center>
		<form action="First_inputstuinfo_result.jsp" method="post">
			<table bgColor="#c0c0c0">
				<tr>
					<td align="center" bgcolor=green colspan=2><font color=white>干部信息录入</font></td>
				</tr>
				<tr>
					<td>真实姓名：</td>
					<td><input type="text" size=20 name="stuName"></td>
				</tr>
				<tr>
					<td>性别</td>
					<td><input type="radio" name="stuSex" checked value="1">男&nbsp;&nbsp;
						<input type="radio" name="stuSex" value="0">女</td>
				</tr>
				<tr>
					<td>职位</td>
					<td><input type="text" name="stuPosition" size=20></td>
				</tr>
				<tr>
					<td>所学部门：</td>
					<td><select name="stuDepartment">
							<option>体育部</option>
							<option>文艺部</option>
							<option>学习部</option>

							<option>组织部</option>
							<option>主席团</option>
							<option>英语部</option>
					</select></td>
				</tr>
				<tr>
					<td>所学专业：</td>
					<td><select name="stuMajor">
							<option>计算机科学与技术</option>
							<option selected>通信工程</option>
							<option>电气工程</option>
					</select></td>
				</tr>
				<tr>
					<td>所在班级：</td>
					<td><input type="text" name="stuGrade" size=20></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input type="text" name="stuPhoneNo" size=50></td>
				</tr>
				<tr>
					<td>入会时间：</td>
					<td><input type="text" name="stuStaTime" size=50></td>
				</tr>
				<tr valign="top">
					<td>参加过的活动</td>
					<td><textarea rows=3 cols=20 name="stuCase"></textarea></td>
				</tr>
				<tr ><td align="center" colspan="2" ><input type="submit"  value="提交">&nbsp;&nbsp; <input
				type="reset"  value="重置"></td></tr>				
			</table>
			
		</form>
	</center>
</body>
</html>
