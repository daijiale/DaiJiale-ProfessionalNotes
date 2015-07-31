//程序员：戴嘉乐
//日期：2012.12.16
//P223T13
#include <stdio.h>
#define N 99


void encrypt (char *message	 ,int shift)
{   int i;
	
	for(i=0;i<N;i++)
	{
		if(message[i]<='Z'&&message[i]>='A')
			message[i]=((message[i]-'A')+shift)%26+'A';
		else if(message[i]<='z'&&message[i]>='a')
			message[i]=((message[i]-'a')+shift)%26+'a';
		else
			;
	}
}
int main()
{
	char str[N];
	int i,n;

	printf("Enter message to be encrypted:");
	gets(str);
	printf("Enter shift :");
	scanf("%d",&n);
	encrypt(str,n);
	printf("Encrypted message: ");
	puts(str);
	return 0;
}


