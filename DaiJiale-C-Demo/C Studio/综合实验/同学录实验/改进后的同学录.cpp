// addressbook.cpp : Defines the entry point for the console application.
//����Ա��������
//ʱ�䣺2012��11��23�� 

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define STU_INFO_FILE	"c:\\classmates_info_file.txt" //�����ı���Ϣ�洢·�� 
#define FAILURE 0xFFFFFFFF
#define SUCCESS !0xFFFFFFFF
#define	MAX_STU_COUNT 80
#define TRUE	1
#define	FALSE	0

char		Name[MAX_STU_COUNT][10+1];	//��������������Ϊ10���ַ��� 
char		Email[MAX_STU_COUNT][20+1]; //��������������Ϊ20���ַ��� 
__int64		StudentNumber[MAX_STU_COUNT]; //ѧ�Ź���������unsigned intҲ�����洢������64λ���ͣ�
__int64		MobilePhoneNumber[MAX_STU_COUNT]; //ͬ�� 
__int64		QQNumber[MAX_STU_COUNT]; //ͬ��
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
		printf("��ȡ�Ľ����ͬѧ¼ϵͳʧ��!\n");
		return FAILURE;
	}
	else
		printf("��ӭ����Ľ����ͬѧ¼ϵͳ!\n");
		printf("����Ա��������\n");
		printf("������ʦ������\n"); 
	
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
					printf("�ҵ����ѧ����\n");
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
					printf("�ҵ����ѧ����\n");
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
					printf("�ҵ����ѧ����\n");
					Output(i);
					return i;
				}
			}
		}
		else
			printf("�Ƿ�����.\n");
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
	}//��˳�Ƶ�����������λ 
	
	strcpy(Name[index],name);
	strcpy(Email[index],email);
	MobilePhoneNumber[index]=mobile_phone_number;
	QQNumber[index]=qq_number;
	
	printf("����ɹ�.\n\n");
	
	Find(mobile_phone_number,0);
	
	return index;
}

int Delete(unsigned int index)
{
	int i;
	if(index<CurrentStudentCount)//�ж�����������Ƿ���������Χ�� 
	{
	 for(i=index;i<=CurrentStudentCount;i++)
	{
		strcpy(Name[i],Name[i+1]);
		strcpy(Email[i],Email[i+1]);
		MobilePhoneNumber[i]=MobilePhoneNumber[i+1];
		QQNumber[i]=QQNumber[i+1];
	}//��˳�Ƶ�����������λ
	
	CurrentStudentCount--;
	
	printf("Delete Successfully.\n\n");
	
	
	
	return index;
}

      else
      
	  printf("û���ҵ��������\n");
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
		printf("==========================�˵�================================\n\n");
		printf("**********�ף������д��ĸ O ��ͬѧ¼�б�*******************\n\n");
		printf("**********�ף������д��ĸ F ��ȷ����ͬѧ*********************\n\n");
		printf("**********�ף������д��ĸ I ������ͬѧ����ͬѧ¼��Ϣ*********\n\n");
		printf("**********�ף������д��ĸ D ɾ��ͬѧ����ͬѧ¼��Ϣ***********\n\n");
		printf("**********�ף������д��ĸ Q �˳�������***********************\n\n");
		fflush(stdin);
		scanf("%c",&command_char);
		switch(command_char)
		{
		
		case 'O':
			{
			printf("    ѧ��         ����     �ֻ���     ����         QQ����\n");
			OutputAll();
			break;
		     }
		
		case 'F':
			{
				printf("������绰�������QQ�ź󰴻س�����ѯ��ÿ��������밴�س��ٴ����룩\n");
				char mobile_phone_number_char[11 + 1];	
				char qq_number_char[10 + 1];	
				__int64		mobile_phone_number_int;
				__int64		qq_number_int; //ͬ��
				scanf("%s",mobile_phone_number_char);
				scanf("%s",qq_number_char);
				mobile_phone_number_int = _atoi64(mobile_phone_number_char);		
				qq_number_int = _atoi64(qq_number_char);
				errcode = Find(mobile_phone_number_int, qq_number_int);
				if(errcode == FAILURE)
					printf("û���ҵ�\n");
				break;
			}
		case 'I':
			{
				printf("������������ͬѧ�ı�ţ�ѧ�ţ��������ֻ��ţ����䣬QQ�ţ�ÿ��������밴�س��ٴ����룩\n");
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
				printf("δ�ɹ���\n");
				break;
			}
		case 'D':
			{
				printf("��������Ҫɾ��ͬѧ�ı�ź󰴻س�:\n");
				__int64 index;
				char index_char[5+1];
				scanf("%s",index_char);
				index=_atoi64(index_char);
				errcode = Delete(index);
				if(errcode == FAILURE)
				printf("δ�ɹ���\n");
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




