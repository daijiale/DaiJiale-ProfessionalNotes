#include <stdio.h>
int main ()
{
	int a,b,c,d,e,f,g,h,i,j,k,x;
	printf("enter the first 11 digits of a UPC:");
	scanf("%1d%1d%1d%1d%1d%1d%1d%1d%1d%1d%1d",&a,&b,&c,&d,&e,&f,&g,&h,&i,&j,&k);
	x=9-((a+c+e+g+i+k)*3+(b+d+f+h+j)-1)%10;
	printf("check digit :%1d",x);
	return 0;
}
