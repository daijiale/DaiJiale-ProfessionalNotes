//*����Ա��������*//
//*2012��11��20��*//
//*�޸ĵ����±����5*//


#include<stdio.h>
float tax_cacula(float tax)
{
	float i;
	if (tax <=7.5)
		i = tax*100;
	else if (tax<=37.5)
		i = (tax-7.5)/0.02+750;
	else if (tax <= 82.5)
		i = (tax-37.5)/0.03+2250;
	else if (tax <= 142.5)
		i = (tax-82.5)/0.04+3750;
	else if (tax <= 230)
 		i = (tax-142.5)/0.05+5250;
	else
		i = (tax-230)/0.06+7000;
	return i;
	
}
int main()
{
	float tax_cacula(float tax);
	float tax;
	printf("�����������˰���ã�");
	scanf("%f",&tax);
	printf("˰��Ϊ:%f\n",tax_cacula(tax));
	return 0;
	 
}