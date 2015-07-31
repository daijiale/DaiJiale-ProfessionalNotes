#include <stdio.h>

int main()
{
	int i,n;
	short a=1;
	
	printf("Enter a positive integer:");
	scanf("%d",&n);
	
	for(i=1;i<=n;i++)
		a*=i;
		
	printf("Facetorial of %d : %d\n",n,a);
	
}