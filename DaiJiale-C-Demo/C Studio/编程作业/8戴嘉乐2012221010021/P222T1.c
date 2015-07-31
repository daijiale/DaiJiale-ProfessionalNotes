//程序员：戴嘉乐
//日期：2012.12.16
//P222T1

#include <stdio.h>
#include <string.h>
#define N 20+1

int main()

{
	char ll[N],ss[N],input[N];
	
	printf("Enter word:");
	gets(input);
	strcpy(ll,input);
	strcpy(ss,input);
	
	while(strlen(input)!=4)
   {
		if(strcmp(ll,input)<0)
			strcpy(ll,input);
		else if(strcmp(ss,input)>0)
			strcpy(ss,input);
		printf("Enter word:");
		gets(input);
	}
	printf("\n");
	printf("Smallest word:%s\n",ss);
	printf("Largest word:%s\n",ll);
	return 0;
}