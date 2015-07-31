//*制作人：戴嘉乐*// 
//*2012.11.11*//
//*输入两个数的值，交换它们的值，并输出交换前后的数*// 

#include<stdio.h>
int main()
{
	int x,y,t;
	printf("请输入两个值：");x
	scanf("%d %d",&x,&y);
	printf("%d %d\n",x,y);
	t=x;
	x=y;
	y=t;
	printf("%d %d",x,y);
	return 0;
	
}