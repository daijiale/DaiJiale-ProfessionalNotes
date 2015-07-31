#include <stdio.h>
int main()
{
	int n,g,s,b;
	printf("Enter a three-digit: ");
	scanf("%d",&n);
	
	b=n/100;
	g=(n-(b*100))%10;
	s=(n-(b*100))/10;
	
	printf("The reversal is:%d%d%d\n",g,s,b);
	
	return 0;
}
