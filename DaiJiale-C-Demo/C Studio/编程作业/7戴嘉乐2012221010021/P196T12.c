//程序员：戴嘉乐
//日期：2012年12月7号 

#include <stdio.h>
#define N 5
void find_two_largest(int *a,int n,int *largest,int *second)
{
	int i;
	*largest=*a;
	*second=*a;
	
	for(i=0;i<n;i++)
    {	
      if(*largest<*(a+i))
      *largest=*(a+i);
			}		
	for(i=0;i<n;i++)
	{
	  if(*second<*(a+i)&&*(a+i)<*largest)
			*second=*(a+i);
	}
	
}

int main()
{
	int num[N]={1,4,5,6,9},largest,second_largest,i;
    printf("随意一个数组为:\n");
    for(i=0;i<N;i++)
    printf("%d,",num[i]);
	find_two_largest(num,N,&largest,&second_largest);
	printf("\n");
	printf("最大的数是%d 第二大的数是%d \n",largest,second_largest);
	return 0;
}