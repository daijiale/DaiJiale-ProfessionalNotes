#include <stdio.h>

int main()
{
	int num,start,i;
	
	printf("Enter number of days in month:");
	scanf("%d",&num);
	printf("Enter starting day of the week(1=Sun,7=Sat):");
	scanf("%d",&start);
	
	putchar('\n');
	
	for(i=start-1;i>0;i--)
		printf("   ");
		
	for(i=1;i<=num;++i)
	{
		if((i+start-1)%7==0)
			printf("%2d \n",i);
		else
			printf("%2d ",i);
	}
	
	putchar('\n');
	
	return 0;
}