//程序员：戴嘉乐 
//日期：2012.12.17 

#include <stdio.h>
#include <string.h>
#include <ctype.h>

#define N 100

double compute_average_word_length(const char* sentence);

int main()
{
	char words[N+1];
	printf("输入你的句子:");
	gets(words);
	printf("单词的平均长度:%.2f\n",compute_average_word_length(words));
	return 0;
}

double compute_average_word_length(const char *sentence)
{
	int words_count=1,alpha_count=0;
	const char *p=sentence;
	while(*p){

		if(isalpha(*p)) alpha_count++;
		if(*p==' ') words_count++;
		p++;
	}
	return ((double)alpha_count/words_count);
}