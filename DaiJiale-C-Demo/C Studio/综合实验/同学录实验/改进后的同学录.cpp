// addressbook.cpp : Defines the entry point for the console application.
//程序员：戴嘉乐
//时间：2012年11月23号 

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define STU_INFO_FILE	"c:\\classmates_info_file.txt" //定义文本信息存储路径 
#define FAILURE 0xFFFFFFFF
#define SUCCESS !0xFFFFFFFF
#define	MAX_STU_COUNT 80
#define TRUE	1
#define	FALSE	0

char		Name[MAX_STU_COUNT][10+1];	//存放姓名，名字最长为10个字符； 
char		Email[MAX_STU_COUNT][20+1]; //存放姓名，名字最长为20个字符； 
__int64		StudentNumber[MAX_STU_COUNT]; //学号过长，即便unsigned int也不够存储，采用64位整型；
__int64		MobilePhoneNumber[MAX_STU_COUNT]; //同上 
__int64		QQNumber[MAX_STU_COUNT]; //同上
int			CurrentStudentCount = 0;

int AddStuInfoFromFile()
{
	int tmpi;
	char student_number_char[13 + 1];
	char mobile_phone_number_char[11 + 1];	
	char qq_number_char[10 + 1];	
	FILE * pFile = NULL;
	
	pFile = fopen(STU_INFO_FILE, "r");
	if(!pFile)
	{
		printf("读取改进后的同学录系统失败!\n");
		return FAILURE;
	}
	else
		printf("欢迎进入改进后的同学录系统!\n");
		printf("程序员：戴嘉乐\n");
		printf("辅导老师：潘晔\n"); 
	
	memset(StudentNumber,0,8);
	memset(MobilePhoneNumber,0,8);
	memset(QQNumber,0,8);
	memset(Name,0,MAX_STU_COUNT * (10 + 1));
	memset(Email,0,MAX_STU_COUNT * (20 + 1));	
	
	while(!feof(pFile))
	{		
		fscanf(pFile,"%s",student_number_char);
		fscanf(pFile,"\t%s",Name[CurrentStudentCount]);
		fscanf(pFile,"\t%s",mobile_phone_number_char);
		fscanf(pFile,"\t%s",Email[CurrentStudentCount]);
		fscanf(pFile,"\t%s\n",qq_number_char);
		StudentNumber[CurrentStudentCount] = _atoi64(student_number_char);
		MobilePhoneNumber[CurrentStudentCount] = _atoi64(mobile_phone_number_char);		
		QQNumber[CurrentStudentCount] = _atoi64(qq_number_char);		
		CurrentStudentCount++;
	}
	
	fclose(pFile);
	return SUCCESS;
}

void Output(int index)
{    
	printf("%d:%I64d,%s,%I64d,%s,%I64d\n", index,StudentNumber[index], Name[index],
		MobilePhoneNumber[index], Email[index],QQNumber[index]);		
}

void OutputAll()
{
	int tmpi;
	
	for(tmpi = 0; tmpi < CurrentStudentCount; tmpi++)
	{
		Output(tmpi);
	}
}

int Find(__int64 mobile_phone_number, __int64 qq_number)
{   
    int i;
	
	if(mobile_phone_number>0){
		if(qq_number==0){
			for(i=0;i<MAX_STU_COUNT;i++)
			{
				if(MobilePhoneNumber[i]==mobile_phone_number)
				{
					printf("找到这个学生！\n");
					Output(i);
					return i;
				}
			}
		}
	
		else{
			for(i=0;i<MAX_STU_COUNT;i++)
			{
				if(MobilePhoneNumber[i]==mobile_phone_number&&QQNumber[i]==qq_number)
				{
					printf("找到这个学生！\n");
					Output(i);
					return i;
				}
				
			}
		}
	}
	
	else if(mobile_phone_number==0){
		if(qq_number>0){
			for(i=0;i<MAX_STU_COUNT;i++)
			{
				if(QQNumber[i]==qq_number)
				{
					printf("找到这个学生！\n");
					Output(i);
					return i;
				}
			}
		}
		else
			printf("非法输入.\n");
	}
	return FAILURE;
	OutputAll();
}

int Insert(
		   unsigned int 	index,
		   char			name[10+1],
		   char			email[20+1],
		   __int64 		student_number,
		   __int64		mobile_phone_number,
		   __int64 		qq_number
		   )
{
	if(CurrentStudentCount>=MAX_STU_COUNT){
	printf("The people is full,please delete some people firstly\n:");
		return FAILURE;
		
	}
	
	
	int i;
	
	for(i=CurrentStudentCount;i>=index;i--){
		strcpy(Name[i+1],Name[i]);
		strcpy(Email[i+1],Email[i]);
		MobilePhoneNumber[i+1]=MobilePhoneNumber[i];
		QQNumber[i+1]=QQNumber[i];
	}//用顺势迭代将数据移位 
	
	strcpy(Name[index],name);
	strcpy(Email[index],email);
	MobilePhoneNumber[index]=mobile_phone_number;
	QQNumber[index]=qq_number;
	
	printf("插入成功.\n\n");
	
	Find(mobile_phone_number,0);
	
	return index;
}

int Delete(unsigned int index)
{
	int i;
	if(index<CurrentStudentCount)//判断输入的索引是否在搜索范围内 
	{
	 for(i=index;i<=CurrentStudentCount;i++)
	{
		strcpy(Name[i],Name[i+1]);
		strcpy(Email[i],Email[i+1]);
		MobilePhoneNumber[i]=MobilePhoneNumber[i+1];
		QQNumber[i]=QQNumber[i+1];
	}//用顺势迭代将数据移位
	
	CurrentStudentCount--;
	
	printf("Delete Successfully.\n\n");
	
	
	
	return index;
}

      else
      
	  printf("没有找到这个数字\n");
	  return FAILURE;
}
int main()
{
	int tmpi;
	int errcode = 0;
	
	tmpi = AddStuInfoFromFile();
	char command_char;
	
	
	while(1)
	{   
        printf("\n");
		printf("==========================菜单================================\n\n");
		printf("**********亲，输入大写字母 O 打开同学录列表*******************\n\n");
		printf("**********亲，输入大写字母 F 精确查找同学*********************\n\n");
		printf("**********亲，输入大写字母 I 插入新同学个人同学录信息*********\n\n");
		printf("**********亲，输入大写字母 D 删除同学个人同学录信息***********\n\n");
		printf("**********亲，输入大写字母 Q 退出本程序***********************\n\n");
		fflush(stdin);
		scanf("%c",&command_char);
		switch(command_char)
		{
		
		case 'O':
			{
			printf("    学号         姓名     手机号     邮箱         QQ号码\n");
			OutputAll();
			break;
		     }
		
		case 'F':
			{
				printf("请输入电话号码或者QQ号后按回车键查询（每次输入后请按回车再次输入）\n");
				char mobile_phone_number_char[11 + 1];	
				char qq_number_char[10 + 1];	
				__int64		mobile_phone_number_int;
				__int64		qq_number_int; //同上
				scanf("%s",mobile_phone_number_char);
				scanf("%s",qq_number_char);
				mobile_phone_number_int = _atoi64(mobile_phone_number_char);		
				qq_number_int = _atoi64(qq_number_char);
				errcode = Find(mobile_phone_number_int, qq_number_int);
				if(errcode == FAILURE)
					printf("没有找到\n");
				break;
			}
		case 'I':
			{
				printf("请依次输入新同学的标号，学号，姓名，手机号，邮箱，QQ号（每次输入后请按回车再次输入）\n");
				__int64 index;
				char mobile_phone_number_char[11 + 1];	
				char qq_number_char[10 + 1];
				char email_char[20+1];
				char student_number_char[20+1];
				char name[10+1];
				char index_char[5+1];
				__int64		student_number_int;	
				__int64		mobile_phone_number_int;
				__int64		qq_number_int; 
				scanf("%s",index_char);
				scanf("%s",name);
				scanf("%s",email_char);
				scanf("%s",student_number_char);
				scanf("%s",mobile_phone_number_char);
				scanf("%s",qq_number_char);
				index=_atoi64(index_char);
				mobile_phone_number_int = _atoi64(mobile_phone_number_char);		
				qq_number_int = _atoi64(qq_number_char);
				student_number_int=_atoi64(student_number_char);
				errcode = Insert(index,name,email_char,student_number_int,mobile_phone_number_int,qq_number_int);
				if(errcode == FAILURE)
				printf("未成功！\n");
				break;
			}
		case 'D':
			{
				printf("请输入所要删除同学的标号后按回车:\n");
				__int64 index;
				char index_char[5+1];
				scanf("%s",index_char);
				index=_atoi64(index_char);
				errcode = Delete(index);
				if(errcode == FAILURE)
				printf("未成功！\n");
				break;
			}
		case 'Q':
			return SUCCESS;
		default:
			printf("Invalid Command\n");
			break;
			
		}
		
	}
	return	SUCCESS;
}




