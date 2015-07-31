//程序员：戴嘉乐 
//日期：2012.12.17 

#include <stdio.h>
int main()
{
	char *mon[]={"January","February","March","April","May","June","July","August","September","October","November","December"};
	int day,year,mm;
	printf("Enter a date : (mm/dd/yyyy):");
	scanf("%d/%d/%d",&mm,&day,&year);
	printf("You entered the date %s %d, %d\n",mon[mm-1],day,year);
	return 0;
}