#include <stdio.h>

int main()
{
	float price,value,commission,opponent;
	int num;
	
	printf("输入价格：");
	scanf("%f",&price);
	printf("输入数量：");
	scanf("%d",&num);
	
	value=price*num;
	
	if(value<2500.00f)
		commission=30.00f+0.017f*value;
	else if(value<6250.00f)
		commission=56.00f+.0066f*value;
	else if(value<20000.00f)
		commission=76.00f+.0034f*value;
	else if(value<50000.00f)
		commission=100.00f+.0022f*value;
	else if(value=500000.00f)
		commission=155.00f+.0011f*value;
	else 
		commission=255.00f+.0009f*value;
		
	if(commission<39.00f)
		commission=39.00f;
		
	if(num<2000)
		opponent=33.00f*num+.03f;
	else
		opponent=33.00f*num+.02f;
		
	printf("佣金：$%.2f\n",commission);
	printf("对手佣金：$%.2f\n",opponent);
	
	return 0;
	
}