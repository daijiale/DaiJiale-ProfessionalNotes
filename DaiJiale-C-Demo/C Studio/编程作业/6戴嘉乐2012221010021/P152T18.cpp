//*����Ա��������*//
//*2012��11��25��*//
//*��д�ݹ���gcd����*//

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
	printf("����������n��m��");
	scanf("%d,%d",&n,&m);
	printf("n��m�����Լ���ǣ�");
	printf("%d\n",gcd(n,m)); 
	
    return 0;
}