#include <stdio.h>

int main()
{
	int a[5][5];
	int i,m,sum_student[5]={0},sum_subject[5]={0},high[5],low[5],hi=0,lo=0;
	
	for(i=0;i<5;i++)
	{
		printf("Enter the marks of student %d: ",i+1);
		scanf("%d %d %d %d %d",&a[i][0],&a[i][1],&a[i][2],&a[i][3],&a[i][4]);
	}
	
	for(i=0;i<5;i++)
	{
		for(m=0;m<5;m++)
		{	sum_student[i]+=a[i][m];
			sum_subject[i]+=a[m][i];
			}
	}
	
	for(m=0;m<5;m++)
	{
		hi=a[0][m];lo=a[0][m];
		for(i=0;i<5;i++)
		{
			if(a[i][m]>=hi)
			hi=a[i][m];
			if(a[i][m]<=lo)
			lo=a[i][m];
		}
		high[m]=hi;
		low[m]=lo;
	}
	
	printf("\nStudents' totals: ");
	for(i=0;i<5;i++)
	printf("%d ",sum_student[i]);
	printf("\nStudents' averages: ");
	for(i=0;i<5;i++)
	printf("%.1f ",sum_student[i]/5.0f);
	
	printf("\n\nSubjects' averages: ");
	for(i=0;i<5;i++)
	printf("%.1f ",sum_subject[i]/5.0f);
	printf("\nThe highest of subjects: ");
	for(i=0;i<5;i++)
	printf("%d ",high[i]);
	printf("\nThe lowest of subjects: ");
	for(i=0;i<5;i++)
	printf("%d ",low[i]);	
	
	putchar('\n');
	
	return 0;
}