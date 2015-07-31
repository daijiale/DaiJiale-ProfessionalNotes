//*程序员：戴嘉乐*//
//*2012年11月20日*//
//*修改第八章编成题16*//

#include<stdio.h>
#include<stdbool.h>

void read_word(int counts[26])
{
	int i;
	char j;
	for(i=0;i<26;i++)
	{
	counts[i]=0;
	}
	j=getchar();
do 
{
	    if(j=='A'||j=='a')
		counts[0]++;
        else if(j=='B'||j=='b')
		counts[1]++;
		else if(j=='C'||j=='c')
		counts[2]++;
		else if(j=='D'||j=='d')
		counts[3]++;
		else if(j=='E'||j=='e')
		counts[4]++;
		else if(j=='F'||j=='f')
		counts[5]++;
		else if(j=='G'||j=='g')
		counts[6]++;
		else if(j=='H'||j=='h')
		counts[7]++;
		else if(j=='I'||j=='i')
		counts[8]++;
		else if(j=='J'||j=='j')
		counts[9]++;
		else if(j=='K'||j=='k')
		counts[10]++;
		else if(j=='L'||j=='l')
		counts[11]++;
		else if(j=='M'||'j==m')
		counts[12]++;
		else if(j=='N'||j=='n')
		counts[13]++;
		else if(j=='O'||j=='o')
		counts[14]++;
		else if(j=='P'||j=='p')
		counts[15]++;
		else if(j=='Q'||j=='q')
		counts[16]++;
		else if(j=='R'||j=='r')
		counts[17]++;
		else if(j=='S'||j=='s')
		counts[18]++;
		else if(j=='T'||j=='t')
		counts[19]++;
		else if(j=='U'||j=='u')
		counts[20]++;
		else if(j=='V'||j=='v')
		counts[21]++;
		else if(j=='W'||j=='w')
		counts[22]++;
		else if(j=='X'||j=='x')
		counts[23]++;
		else if(j=='Y'||j=='y')
		counts[24]++;
		else if(j=='Z'||j=='z')
		counts[25]++;
		
		j=getchar();
	
		   
}while(j!='\n');
    
}
bool equal_array(int count1[],int count2[])
{
    int i;
    for (i=0;i<26;i++)
	{
	if(count1[i]==count2[i])
    return true;
	else
	return false;
	}
}
int main()
{
    int count1[26],count2[26];
	printf("Enter first word:");
    read_word(count1);
    printf("Enter second word:");
    read_word(count2);
    if(equal_array(count1,count2))
    printf("The words are anagrams.");
    else
    printf("The words are not anagrams.\n");
    return 0;
}
