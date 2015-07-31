//*ACM*//
//*´¬³¤¶àÉÙËê*// 
#include<stdio.h>
int main()
{
	int a,b,c,d,T,i;
	scanf("%d",&T);
	int sum[T],old[T];
	for(i=0;i<T;i++)
	{
        scanf("%d %d %d %d",&a,&b,&c,&d);
		sum[i]=a*c+b*d;
       	if(sum[i]<=500000)
		old[i]=21;
		else if(sum[i]>500000&&sum[i]<=1000000)
		old[i]=27;
		else if(sum[i]>1000000)
		old[i]=29;
		
		if (b!=0&&(a-b)>old[i])
		old[i]=a-b;
		
	}
	for(i=0;i<T;i++)
	printf("%d\n",old[i]);
	return 0;
}