//*程序员：戴嘉乐*//
//*2012年11月20日*//
//*修改第五章编成题5*//


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
	printf("输入你的须纳税所得：");
	scanf("%f",&tax);
	printf("税金为:%f\n",tax_cacula(tax));
	return 0;
	 
}