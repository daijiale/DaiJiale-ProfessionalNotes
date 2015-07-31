//*作者：戴嘉乐*//
//*编写 【最大值函数】*//

float max(float x,float y)
{
	float z;
	z=x>y?x:y;
	return(z);
}
#include<stdio.h>
int main()
{
	float max(float x,float y);
	float a,b,c;
	printf("请输入两个数字：");
	scanf("%f,%f",&a,&b);
	c=max(a,b);
	printf("max is\t%f\n",c);
	return 0;
}
