#include <stdio.h>

int main()
{
	int m,n,t;
	
	printf("Enter two integers:");
	scanf("%d %d",&m,&n);
	
	while(m!=0)
		{
			t=n%m;
			n=m;
			m=t;
		}
	
	printf("GCD: %d\n",n);
	
	return 0;
}