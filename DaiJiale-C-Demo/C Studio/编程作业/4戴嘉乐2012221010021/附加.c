#include <stdio.h>

int main()
{
	int i,n,m,p=0,j;
	printf("Enter the size:");
	scanf("%d",&n);
	
	int a[99][99]={0};
	a[0][(n-1)/2]=1;
	j=(n-1)/2;
	
	for(i=2;i<=n*n;i++)
	{
		p--;
		j++;
		if(p>=0)  ;
		else p+=n;
		if(j<=n-1)  ;
		else j+=(-n);
		if(a[p][j]==0)
			a[p][j]=i;
		else
			a[++p][j]=i;
	}
	
	for(i=0;i<n;i++){
		printf("\n");
		for(m=0;m<n;m++)
			printf("%3d ",a[i][m]);
	}
	printf("\n");
		
	
}
