//*ACM系类*// 
//*输入a,b,c，输出a+b+c*//
#include<stdio.h>
int main()
{
	int a,b,c,T,i;
	scanf("%d",&T);
	int sum[T];
	for(i=1;i<=T;i++)
	{
	 scanf("%d %d %d",&a,&b,&c);
	 sum[i-1]=a+b+c;
	}
     	
	for(i=0;i<T;i++)
	{
	printf("%d\n",sum[i]);
	}
	return 0;
}