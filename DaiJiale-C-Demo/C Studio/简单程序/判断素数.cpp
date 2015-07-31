#include<stdio.h>
#include <math.h>
void prime(int n)            /*n是一个正整数*/ 
{
	int i=2;
	while((n%i)!=0&&i*1.0<sqrt(n))
	if(i*1.0>sqrt(n))
		printf("&d是一个素数\n",n);
	else
		printf("&d不是一个素数\n",n);
}

int main()
{
	int a;
	printf("输入一个数字：");
	scanf("%d\n",&a);
	prime(a);
	return 0; 
}