#include<stdio.h>
#include <math.h>
void prime(int n)            /*n��һ��������*/ 
{
	int i=2;
	while((n%i)!=0&&i*1.0<sqrt(n))
	if(i*1.0>sqrt(n))
		printf("&d��һ������\n",n);
	else
		printf("&d����һ������\n",n);
}

int main()
{
	int a;
	printf("����һ�����֣�");
	scanf("%d\n",&a);
	prime(a);
	return 0; 
}