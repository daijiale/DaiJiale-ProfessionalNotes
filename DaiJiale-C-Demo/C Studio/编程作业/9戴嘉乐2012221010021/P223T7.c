//程序员：戴嘉乐 
//日期：2012.12.17 

#include<stdio.h>
#include<string.h>

int main()
{
	int num,m,n;
	char *second_digit[]={"twenty","thirty","forty","fifty","sixty","seventy","eighty","ninty"};
    char *first_digit[]={"zero","one","two","three","four","five","six","seven","eight","nine"};
    char *others[]={"ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen"};
    
	printf("输入一个两位数:");
	scanf("%d",&num);
	
	m=num%10;
	n=(num-m)/10;
	
    if(num<10||num>=100)
    	printf("非法数字，请重新输入一个两位数");
    else if(num>=20&&m!=0)
    {
    	printf("%s ",second_digit[n-2]);
    	printf("%s\n",first_digit[m]);
    }
    else if(num<20&&num>=10)
    	printf("%s\n",others[num-10]);
    else
    	printf("%s\n",second_digit[num/10-2]);
    	
	return 0;
}
