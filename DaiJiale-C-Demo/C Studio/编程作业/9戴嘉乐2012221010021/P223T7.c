//����Ա�������� 
//���ڣ�2012.12.17 

#include<stdio.h>
#include<string.h>

int main()
{
	int num,m,n;
	char *second_digit[]={"twenty","thirty","forty","fifty","sixty","seventy","eighty","ninty"};
    char *first_digit[]={"zero","one","two","three","four","five","six","seven","eight","nine"};
    char *others[]={"ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen"};
    
	printf("����һ����λ��:");
	scanf("%d",&num);
	
	m=num%10;
	n=(num-m)/10;
	
    if(num<10||num>=100)
    	printf("�Ƿ����֣�����������һ����λ��");
    else if(num>=20&&m!=0)
    {
    	printf("%s ",second_digit[n-2]);
    	printf("%s\n",first_digit[m]);
    }
    else if(num<20&&num>=10)
    	printf("%s\n",others[num-10]);
    else
    	printf("%s\n",second_digit[num/10-2]);
    	
	return 0;
}
