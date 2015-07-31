//*程序员：戴嘉乐*//
//*2012年11月25日*//
//*编写递归版的gcd函数*//

#include<stdio.h>
int gcd(int n,int m)
{  
   int j;
   j=m%n;
   m=n;
   n=j;
   if(n==0)
   return m;
   else
   return gcd(n,j);
}


int main()
{   
    int n,m; 
	printf("请输入整数n，m：");
	scanf("%d,%d",&n,&m);
	printf("n，m的最大公约数是：");
	printf("%d\n",gcd(n,m)); 
	
    return 0;
}