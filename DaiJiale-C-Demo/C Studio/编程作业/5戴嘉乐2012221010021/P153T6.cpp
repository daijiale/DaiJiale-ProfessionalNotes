//*程序员：戴嘉乐*//
//*2012年11月20日*//
//*编写特定函数计算3x^5+2x^4-5x^3-x^2+7x-6的值*//

#include<stdio.h>

int caculator(int x,int m)
{
      m=((((3*x+2)*x-5)*x-1)*x+7)*x-6;
	  return m;   
} 

int main()
{   
    int caculator(int x,int m);
    int x,m;
	printf("请用户输入值：");
	scanf("%d",&x);
	printf("输出计算结果：%d",caculator(x,m)); 
    return 0;
}
