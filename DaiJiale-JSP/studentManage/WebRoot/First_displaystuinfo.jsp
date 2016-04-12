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

<title>My JSP 'displaystuinfo.jsp' starting page</title>

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">

	<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<jsp:include page="islogin.jsp"></jsp:include>
<body>
	<jsp:useBean id="stuSer" class="com.jkxy.service.stuInfoService"></jsp:useBean>
	<%
		List stus = stuSer.queryAllStu();
		Iterator iter = stus.iterator();
		//新建迭代器，用来遍历数组
	%>
	<table>
		<tr>
			<td>编号</td>
			<td>真实姓名</td>
			<td>性别</td>
			<td>职位</td>
			<td>所在部门</td>
			<td>所在专业</td>
			<td>所在班级</td>
			<td>电话</td>
			<td>入会时间</td>
			<td>参加过的活动</td>
		</tr>
		<%
			int i = 0;
			while (iter.hasNext()) {
				stuInfo student = (stuInfo) iter.next();
				//取出每条迭代器中的实体数据
		%>
		<tr <%if (i % 2 == 0) {%> bgcolor="#F0F8FF" <%}%>>
			<td><%=student.getStuNo()%></td>
			<td><%=student.getStuName()%></td>
			
			<td>
				<%
					if (student.getStuSex() == 1)
							out.print("男");
						else
							out.print("女");
				%>
			</td>
			<td><%=student.getStuPosition()%></td>
			<td><%=student.getStuDepartment()%></td>
			<td><%=student.getStuMajor()%></td>
			<td><%=student.getStuGrade()%></td>
			<td><%=student.getStuPhoneNo()%></td>
			<td><%=student.getStuStaTime()%></td>
			<td><%=student.getStuCase()%></td>
	
		</tr>
		<%
			i++;
			}
		%>

	</table>
</body>
</html>