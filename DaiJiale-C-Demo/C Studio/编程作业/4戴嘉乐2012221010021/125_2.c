#include <stdio.h>
#include<stdbool.h>
int main()
{
	int digit_seen[10]={false},digit,i;
	long n;
	
	printf("Enter a number:");
	scanf("%ld",&n);
	
	while(n>0)
	{
		digit=n%10;
		if (digit_seen[digit])
			digit_seen[digit]++;
		else 
			digit_seen[digit]=true;
		
		n/=10;
	}
	
	printf("Digit :      0  1  2  3  4  5  6  7  8  9  \nOccurrences: ");
	for(i=0;i<10;i++)
	printf("%d  ",digit_seen[i]);
	printf("\n");
	return 0;
}