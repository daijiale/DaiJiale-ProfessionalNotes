//*���ߣ�������*//
//*��д �����ֵ������*//

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
	printf("�������������֣�");
	scanf("%f,%f",&a,&b);
	c=max(a,b);
	printf("max is\t%f\n",c);
	return 0;
}
