//*�����ˣ�������*// 
//*2012.11.16*//
//*���������ε����߳�����������ε����*// 

#include<stdio.h>
#include<math.h> 
int main()
{
	float side1,side2,side3,s,c;
	printf("�������������߳���");
	scanf("%f,%f,%f",&side1,&side2,&side3);
	c=1.0/2*(side1+side2+side3);
	s=sqrt(c*(c-side1)*(c-side2)*(c-side3));
	printf("��������ε������%f",s);
	return 0;	 
}
