//程序员：戴嘉乐 
//日期：2012.12.17 

#include <stdio.h>
#include <string.h>
#include <ctype.h>
#include<stdbool.h>
#define N 100

bool is_palindrome(const char *message);

int main()
{
	char words[N+1];
	printf("Enter the words you want to check:");
	gets(words);
	if(is_palindrome(words))
		printf("\nYour words is palindrome.\n");
	else
		printf("Your words is not palindrome.\n");
	return 0;
}

bool is_palindrome(const char *message)
{
	const char *p=message;
	char t1[N+1],t2[N+1];
	char *q=t1;
	while(*p){
		if(isalpha(*p))
			*q++=*p++;
		else p++;
	}
	*q='\0';
	p--;q=t2;
	while(p>=message){
		if(isalpha(*p))
			*q++=*p--;
		else p--;
	}
	*q='\0';
	q=t1;
	while(*q)
		*q++=toupper(*q);
	q=t2;
	while(*q)
		*q++=toupper(*q);

	if(!strcmp(t1,t2))
		return true;
	else
		return false;
}


