//*程序员：戴嘉乐*//
//*2012年11月20日*//
//*编写特定函数*//


#include<stdio.h>

 double inner_product(double a[],double b[],int n)
 {
 	double m=0.0f;
 	int i;
 	for(i=0;i<n;i++)
 	m+=a[i]*b[i];
	return m;
	 
 }
 
 int main()
 {
     double inner_product(double a[],double b[],int n);
      
	double a[99]={0},b[99]={0};
	int i,n;
	printf("输入多少组数字:");
	scanf("%d",&n);

	printf("输入a:");
	for(i=0;i<n;i++)
	scanf("%lf",&a[i]);
	
	printf("输入b:");
	for(i=0;i<n;i++)
	scanf("%lf",&b[i]);

 	 printf("得到%f\n",inner_product(a,b,n));
     return 0;
 }