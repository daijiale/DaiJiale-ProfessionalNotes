//程序员：戴嘉乐
//日期：2012.12.16
//P221T13
#include <stdio.h>
#include <string.h>
#define N 50+1
void build_index_url(const char *domain,char *index_url)
{
	strcpy(index_url,"http://www.");
	strcat(index_url,domain);
	strcat(index_url,"/index.html");
}

int main()
{
	char d[N]="knking.com";
	char i[N];
	build_index_url(d,i);
	puts(i);
	return 0;
}