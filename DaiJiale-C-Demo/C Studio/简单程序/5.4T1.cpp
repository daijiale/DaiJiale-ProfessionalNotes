////*制作人：戴嘉乐*// 
//*2012.12.1*//
//*判断素数的方法*// 

#include<stdio.h>
int main()
{
	int m,i,k,h=0,leap=1,sqrt[100];
	printf("\n");
	sqrt[0]=101;
	for(i=1;i<100;i++)
	{
		sqrt[i]=sqrt[i-1]+1;
	}
	for(m=101;m<=200;m++)
	{
		k=sqrt[m-101];
	    for(i=2;i<=k;i++)
	    if(m&i==0)
	    {
    		leap=0;break;
		}
    		if(leap)
    		{
		    	printf("%-4d",m);
		    	h++;
		    if(h%10==0)
		    printf("\n");
			}
			leap=1;
    	}
printf("\nThe total is %d",h);
return 0;
}
