//程序员：戴嘉乐
//日期：2012年12月7号 

#include <stdio.h>


int *find_largest(int a[],int n)
{
	int i,*max;
	max=&a[0];
	for(i=1;i<n;i++)
		if(*max<a[i])
		 *max=a[i];
	 return max;
}

int main()
{
	int j,a[5]={1,2,3,8,7};
	printf("随意一个含有5个元素的数组为:\n");
    for(j=0;j<5;j++)
    printf("%d,",a[j]);
    printf("\n");
	printf("最大的数是%d\n",*find_largest(a,5));
	return 0;
}