#include <stdio.h>

int main()
{
	long int a;
	int b;
	
	printf("Enter a integer:");
	scanf("%ld",&a);
	
	printf("Inverse:");
	do {
		b=a%10;
		printf("%d",b);
		a/=10;
	}while(a!=0);

	return 0;
}