#include <stdio.h>

int main()
{
	int income;
	float tax;
	
	printf("Input income:");
	scanf("%d",&income);
	
	if(income<=750)
		tax=income*.01f;
	else if(income<=2250)
		tax=(income-750)*.02f+7.50f;
	else if(income<=3750)
		tax=(income-2250)*.03f+37.50f;
	else if(income<=5250)
		tax=(income-3750)*.04f+82.50f;
	else if(income<=7000)
		tax=(income-5250)*.05f+142.50f;
	else 
		tax=(income-7000)*.06f+230.00f;
		
	printf("Tax is $%.2f.\n",tax);
	
	return 0;
}