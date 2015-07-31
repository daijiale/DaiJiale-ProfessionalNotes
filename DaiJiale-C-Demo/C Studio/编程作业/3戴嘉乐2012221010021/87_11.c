#include <stdio.h>

int main()
{
	float e=1.0f,m;
	long int p=1;
	int i,n;
	
	printf("Enter N:");
	scanf("%d",&n);
	
	for(i=1;i<=n;i++)
	{
		p*=i;
		m=(1.0f/p);
		e+=m;
	}
	
	printf("e : %f\n",e);
	return 0;
	
}