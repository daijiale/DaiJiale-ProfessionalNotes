//*����Ա��������*//
//*2012��11��20��*//
//*��д�ض���������3x^5+2x^4-5x^3-x^2+7x-6��ֵ*//

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
	printf("���û�����ֵ��");
	scanf("%d",&x);
	printf("�����������%d",caculator(x,m)); 
    return 0;
}
