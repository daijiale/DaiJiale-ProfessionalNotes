//*程序员：戴嘉乐*//
//*2012年11月20日*//
//*编写返回正整数n中数字个数的函数*//


#include<stdio.h>
int num_digits(int n,int k)
{
	int i,m;
    for(i=1;i<=k;i++)
    {
	m=n%10;
    n/=10;
    }
 	return m;
}

int main()
{   
    int i,k,n;
	printf("输入一组数据：");
	scanf("%d",&n);
	printf("输入第几位：");
	scanf("%d",&k); 
	printf("此数的第%d位是%d\n",k,num_digits(n,k));
	
	return 0;
	 
}