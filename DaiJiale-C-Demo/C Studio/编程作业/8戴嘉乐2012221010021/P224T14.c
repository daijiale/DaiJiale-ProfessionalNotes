//程序员：戴嘉乐
//日期：2012.12.16
//P224T14
#include <stdio.h>
#include <stdbool.h>
#define N 98+1

void read_word(int counts[26],const char *str)
{
	const char *p=str;
	int i;
	while(*p!='\0')
		{
		for(i=0;i<26;i++)
			{
			if(*p=='A'+i||*p=='a'+i)
				{
				counts[i]++;
				p++;
			     }
		    }
        }
}

bool are_anagrams(const char *str1,const char *str2)
{
	int cnt1[26]={0},cnt2[26]={0};
	int i;
	read_word(cnt1,str1);
	read_word(cnt2,str2);
	for(i=0;i<26;i++){
		if(cnt1[i]!=cnt2[i])
			return false;
	}
	return true;
}

int main()
{
	char str1[N],str2[N];
	printf("Enter the first word:");
	gets(str1);
	printf("Enter the second word:");
	gets(str2);
	if(are_anagrams(str1,str2))
		printf("They are anagrams.\n");
	else 
		printf("They are not anagrams.\n");
	return 0;
}
