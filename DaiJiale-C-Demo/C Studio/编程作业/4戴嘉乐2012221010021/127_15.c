#include <stdio.h>

#define MAXNUM 81

int main()
{
	char str[MAXNUM],str_exchange[MAXNUM];
	int i,n;

	printf("Enter message to be encrypted:");
	gets(str);
	printf("Enter shift amount(1-25):");
	scanf("%d",&n);
	
	for(i=0;i<MAXNUM;i++)
	{
		if(str[i]<='Z'&&str[i]>='A')
			str_exchange[i]=((str[i]-'A')+n)%26+'A';
		else if(str[i]<='z'&&str[i]>='a')
            str_exchange[i]=((str[i]-'a')+n)%26+'a';
		else
			str_exchange[i]=str[i];
	}
	
	printf("Encrypted message: ");
	puts(str_exchange);
	printf("\n");
	return 0;
}
