#include <stdio.h>
int main()
{
	float e=1.0f,m,n;
	long p=1;
	int i;
	
	printf("Enter a little number:");
	scanf("%f",&n);
	
	for(i=1;;i++)
	{
		p*=i;
		m=(1.0f/p);
		e+=m;
		if(m<n)
			break;
	}
	
	printf("e : %f\n",e);
	
	return 0;
}