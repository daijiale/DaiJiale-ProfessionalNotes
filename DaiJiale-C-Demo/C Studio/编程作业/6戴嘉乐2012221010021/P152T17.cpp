//*程序员：戴嘉乐*//
//*2012年11月25日*//
//*编写不用递归的fact的函数*//


#include<stdio.h>
int fact(int n)
{
	int sum=1,i;
	for(i=1;i<=n;i++)
	sum*=i;
	return sum;
}

int main()
{   
    int n;
	printf("请输入n的值：");
	scanf("%d",&n);
	printf("n的阶乘为:%d\n",fact(n));
	return 0;	
}