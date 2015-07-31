#include<stdio.h>
int main()
{
	float money,sum;
	printf("Enter an amount:");
	scanf("%f",&money);
	sum=1.05*money;
	printf("With tax added:$%f\n",sum);
	return 0;
}