//*����Ա��������*//
//*2012��11��25��*//
//*��д���õݹ��fact�ĺ���*//


#include<stdio.h>
int fact(int n)
{
	int sum=1,i;
	for(i=1;i<=n;i++)
	sum*=i;
	return sum;
}

int main()
{   
    int n;
	printf("������n��ֵ��");
	scanf("%d",&n);
	printf("n�Ľ׳�Ϊ:%d\n",fact(n));
	return 0;	
}