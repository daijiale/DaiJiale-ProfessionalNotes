#include <stdio.h>

int main()
{
	int hour,min;
	printf("Enter a 24-hour time:");
	scanf("%d:%d",&hour,&min);
	
	if(hour<12)
		printf("Equivalent 12-hour time: %d:%d AM\n",hour,min);
	else if(hour==12&&min==0)
		printf("Equivalent 12-hour time: 12:00AM\n");
	else 
	    printf("Equivalent 12-hour time: %d:%2dPM\n",hour,min);
		
	return 0;
}