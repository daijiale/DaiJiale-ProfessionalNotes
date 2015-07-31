//程序员：戴嘉乐 
//日期：2012.12.17 

#include <stdio.h>
#include <string.h>
#define N 100

void reverse (char *message);

int main()
{
	char words[N+1];
	printf("输入你的单词:");
	gets(words);
	reverse(words);
	printf("反转词为:%s\n",words);
	return 0;
}

void reverse (char *message)
{
	char *p=message,*l=message;
	char t;
	while(*l)
	l++;
	l--;
	for(;;)
	{
		if(p==l||p-1==l)
			break;
		t=*p;*p=*l;*l=t;
		p++;l--;
	}
}
