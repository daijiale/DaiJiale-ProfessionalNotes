//*����Ա��������*//
//*2012��11��20��*//
//*��д����������n�����ָ����ĺ���*//


#include<stdio.h>
int num_digits(int n,int k)
{
	int i,m;
    for(i=1;i<=k;i++)
    {
	m=n%10;
    n/=10;
    }
 	return m;
}

int main()
{   
    int i,k,n;
	printf("����һ�����ݣ�");
	scanf("%d",&n);
	printf("����ڼ�λ��");
	scanf("%d",&k); 
	printf("�����ĵ�%dλ��%d\n",k,num_digits(n,k));
	
	return 0;
	 
}