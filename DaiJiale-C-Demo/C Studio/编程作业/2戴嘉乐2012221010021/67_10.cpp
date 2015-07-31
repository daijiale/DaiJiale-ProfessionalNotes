#include <stdio.h>

int main()
{
	int grade,ten;
	
	printf("Enter numerical grade:");
	scanf("%d",&grade);
	
	ten=grade/10;
	if(grade==100)
		printf("Letter grade:A\n");
	else if(grade<0)
		printf("ERROR\n");
	else 
    switch(ten)
	{
		case 9: printf("Letter grade:A\n");break;
		case 8: printf("Letter grade:B\n");break;
		case 7: printf("Letter grade:C\n");break;
		case 6: printf("Letter grade:D\n");break;
		case 0: case 1: case 2: case 3: case 4:
		case 5: printf("Letter grade:F\n");break;
		default :printf("ERROR\n");break;
	}
	
	return 0;
}