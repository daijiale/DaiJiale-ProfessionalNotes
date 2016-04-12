package com.jkxy.service;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import com.jkxy.model.stuInfo;

//学生会干部业务服务类
public class stuInfoService {
	private Connection conn;
	private PreparedStatement pstmt;

	public stuInfoService() {
		conn = new com.jkxy.conn.conn().getCon();
	}

	//干部数据插入操作
	public boolean addStu(stuInfo stu) {
		try {
			pstmt = conn.prepareStatement("insert into Cadres"
					+ "(stuName,stuSex,stuPosition,stuDepartment,stuMajor,stuGrade,stuPhoneNo,stuStaTime,stuCase) "
					+ "values(?,?,?,?,?,?,?,?,?)");
			pstmt.setString(1, stu.getStuName());
			pstmt.setByte(2, stu.getStuSex());
			pstmt.setString(3, stu.getStuPosition());
			pstmt.setString(4, stu.getStuDepartment());
			pstmt.setString(5, stu.getStuMajor());
			pstmt.setString(6, stu.getStuGrade());
			pstmt.setString(7, stu.getStuPhoneNo());
			pstmt.setString(8, stu.getStuStaTime());
			pstmt.setString(9, stu.getStuCase());

			pstmt.executeUpdate();
			return true;
		} catch (SQLException e) {
			// TODO Auto-generated catch block

			e.printStackTrace();
			return false;
		}

	}
	
   //干部数据遍历操作
	public List queryAllStu() {
		List stus = new ArrayList();
		try {
			pstmt = conn.prepareStatement("select * from Cadres");
			ResultSet rs = pstmt.executeQuery();
			while (rs.next()) {
				stuInfo stu = new stuInfo();
				stu.setStuNo(rs.getInt(1));
				stu.setStuName(rs.getString(2));
				stu.setStuSex(rs.getByte(3));
				stu.setStuPosition(rs.getString(4));
				stu.setStuDepartment(rs.getString(5));
				stu.setStuMajor(rs.getString(6));
				stu.setStuGrade(rs.getString(7));
				stu.setStuPhoneNo(rs.getString(8));
				stu.setStuStaTime(rs.getString(9));
				stu.setStuCase(rs.getString(10));
				
				stus.add(stu);

			}
			return stus;

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}

	}

		//干部数据按照ID查找操作
	public stuInfo queryStubyID(int id) {
//		 List stus = new ArrayList();
		try {
			pstmt = conn
					.prepareStatement("select * from Cadres where stuNo=?");
			pstmt.setInt(1, id);
			ResultSet rs = pstmt.executeQuery();
			if (rs.next()) {
				stuInfo stu = new stuInfo();
				stu.setStuNo(rs.getInt(1));
				stu.setStuName(rs.getString(2));
				stu.setStuSex(rs.getByte(3));
				stu.setStuPosition(rs.getString(4));
				stu.setStuDepartment(rs.getString(5));
				stu.setStuMajor(rs.getString(6));
				stu.setStuGrade(rs.getString(7));
				stu.setStuPhoneNo(rs.getString(8));
				stu.setStuStaTime(rs.getString(9));				
				stu.setStuCase(rs.getString(10));
//				stus.add(stu);
				return stu;

			}
			return null;

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}

	}

	//干部数据更新修改操作
	public boolean updateStu(stuInfo stu) {

		try {
			pstmt = conn.prepareStatement("UPDATE Cadres SET "+"stuName=? , stuSex=? , stuPosition=? ,stuDepartment=? ,stuMajor=? ,stuGrade=? , stuPhoneNo=?, stuStaTime=? ,stuCase=?  "+"WHERE stuNo=?");
			pstmt.setString(1, stu.getStuName());
			pstmt.setByte(2, stu.getStuSex());
			pstmt.setString(3, stu.getStuPosition());
			pstmt.setString(4, stu.getStuDepartment());
			pstmt.setString(5, stu.getStuMajor());
			pstmt.setString(6, stu.getStuGrade());
			pstmt.setString(7, stu.getStuPhoneNo());
			pstmt.setString(8, stu.getStuStaTime());
			pstmt.setString(9, stu.getStuCase());
			pstmt.setInt(10, stu.getStuNo());
			pstmt.executeUpdate();
			return true;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return false;
		}
	}

	
	//干部数据删除操作
	public Boolean deleteStu(int id) {

		try {
			pstmt = conn.prepareStatement("delete from  Cadres where stuNo=?");
			pstmt.setInt(1, id);
			pstmt.executeUpdate();
			return true;
		} catch (Exception e) {
			e.getStackTrace();
			return false;
		}

	}
}
