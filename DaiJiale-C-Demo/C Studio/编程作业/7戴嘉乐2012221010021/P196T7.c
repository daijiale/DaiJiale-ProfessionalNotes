//����Ա��������
//���ڣ�2012��12��7�� 
#include<stdio.h>
#include<stdbool.h>
#define N 3
bool search(const int a[],int n,int key)
{
  {int i;
   for(i=0;i<n;i++)
   if(*(a+i)==key)
   {
     return true;
     break;
   }
   if(i == n)
   return false;
 }
}


int main()
{
   	int b[N]={0,1,5},key;
   	printf("������key��"); 
    scanf("%d",&key);
    if(search(b,N,key))
   	printf("key��ԭ����ƥ��\n");
   	else
   	printf("key��ԭ���鲻ƥ��\n");
	return 0; 
   	
}
