//*制作人：戴嘉乐*// 
//*2012.11.16*//
//*成绩评分系统*// 

#include<stdio.h>
int main()
{
	int goal;
	printf("输入学生的成绩："); 
	scanf("%d",&goal);
	if(goal>=90)
   {printf("成绩评分为：A");}
	else  if(goal>=60)
    {printf("成绩评分为：B");}
    else
    {printf("成绩评分为：C");}
	return 0;
}

