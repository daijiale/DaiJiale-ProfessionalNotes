//*程序员：戴嘉乐*//
//*2012年11月25日*//
//*修改第8章17题*//

#include<stdio.h>

void create_magic_square(int n,char magic_square[99][99])
{
    int i,m,p=0,j;
    magic_square[0][(n-1)/2]=1;
	j=(n-1)/2;
	
	for(i=2;i<=n*n;i++)
	{
		p--;
		j++;
		if(p>=0)  ;
		else p+=n;
		if(j<=n-1) ;
		else j-=n;
		if(magic_square[p][j]==0)
			magic_square[p][j]=i;
		else{
			if(p+2<n) p+=2 ;
			else p=p+2-n;
			if(j>0) j-=1 ;
			else j=j-1+n;
			magic_square[p][j]=i;
		}
	}
	
	
}



void print_magic_square(int n,char magic_square[99][99])
{
	int i,m;
	for(i=0;i<n;i++)
{
	    printf("\n");
		for(m=0;m<n;m++)
		printf("%3d ",magic_square[i][m]);
}
}

int main()
{
	int n;
	char magic_square[99][99]={0};
	printf("Enter the size:");
	scanf("%d",&n);
	create_magic_square(n,magic_square);
	print_magic_square(n,magic_square);
	printf("\n");
	return 0;		
}