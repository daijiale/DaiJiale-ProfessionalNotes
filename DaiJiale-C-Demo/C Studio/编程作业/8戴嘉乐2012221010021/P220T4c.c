//����Ա��������
//���ڣ�2012.12.16
//P220T4 c

#include <stdio.h>
#include <ctype.h>
#define N 20
int read_line(char str[],int n)
{
	int ch,i=0;
	
	ch=getchar();
	
	while(ch!='\n')
	{
		if(i<n)
			str[i++]=ch;
		ch=getchar();
	}
	str[i]='\n';
	str[i+1]='\0';
	return i;
}


int main()
{
	char string[N+1];
	printf("�������ַ�����\n"); 
	read_line(string,N+1);
	printf("������ַ���Ϊ��\n"); 
	puts(string);
	return 0;
}