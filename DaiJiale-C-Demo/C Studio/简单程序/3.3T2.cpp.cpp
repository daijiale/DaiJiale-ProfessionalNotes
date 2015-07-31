//*制作人：戴嘉乐*// 
//*输入一个小写英文字母，显示该字母对应的大写字母*//




#include<stdio.h>
int main()
{
    char letter;
	printf("输入一个小写英文字母：");
	scanf("%c",&letter);
    printf("%c\t%c",letter,letter+'A'-'a');
    return 0;
}