//*����Ա��������*//
//*2012��11��20��*//
//*��д�ض�����*//


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
	printf("�������������:");
	scanf("%d",&n);

	printf("����a:");
	for(i=0;i<n;i++)
	scanf("%lf",&a[i]);
	
	printf("����b:");
	for(i=0;i<n;i++)
	scanf("%lf",&b[i]);

 	 printf("�õ�%f\n",inner_product(a,b,n));
     return 0;
 }