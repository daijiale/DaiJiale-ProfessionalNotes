//����Ա��������
//���ڣ�2012.12.16
//P220T6 

#include <stdio.h>
#include <string.h>

#define N 10

void censor(char a[],int n)
{
 	char *p=a;
 	char *q="xxx";
	while(p<a+n-2)
	{ 	
		if(strncmp(p,"foo",3)==0)
		{
         strncpy(p,q,3);    			
		}
		else
			p++;       
	}
}

int main()
{
 	char *str;
 	printf("�����ַ�����\n");
    gets(str);
	censor(str,N);
	printf("����ַ�����\n");
	puts(str);             	 	
    return 0;
}