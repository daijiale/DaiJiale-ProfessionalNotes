//程序员：戴嘉乐
//日期：2012年12月7号 
#include<stdio.h>
#include<stdbool.h>
#define N 3
bool search(const int a[],int n,int key)
{
  {int i;
   for(i=0;i<n;i++)
   if(*(a+i)==key)
   {
     return true;
     break;
   }
   if(i == n)
   return false;
 }
}


int main()
{
   	int b[N]={0,1,5},key;
   	printf("请输入key："); 
    scanf("%d",&key);
    if(search(b,N,key))
   	printf("key与原数组匹配\n");
   	else
   	printf("key与原数组不匹配\n");
	return 0; 
   	
}
