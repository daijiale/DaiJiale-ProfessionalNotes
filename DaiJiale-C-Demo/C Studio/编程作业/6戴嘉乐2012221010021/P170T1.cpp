//*程序员：戴嘉乐*//
//*2012年11月25日*//
//*修改10.2节的栈*//

#include<stdio.h>
#include<stdbool.h>


#define STACK_SIZE 4


char contents[STACK_SIZE];
int top=0;

void stack_overflow(void)
{
	printf("The stack is over flow");
}

void stack_underflow(void)
{
	printf("The stack is under flow");
} 


void make_empty(void)
{
	top=0;
} 

bool is_empty(void)
{
	return top==0;
} 

bool is_full(void)
{
	return top==STACK_SIZE;
}
void push(int i)
{   
	if(is_full())
	stack_overflow();
	else
	contents[top++]=i;
}
int pop(void)
{
	if(is_empty())
	stack_underflow();
	else
	return contents[--top];
 }
 


int main()
{   
    int i;
    char j;
    make_empty();
   	printf("Enter parenteses and/or braces:");
	for(i=0;i<4;i++)
	{
	 scanf("%c",&j);
	 if(j==10&&top==0)
	 printf("Parenteses/braces are nested properly\n");  	
	 if(j==40||j==123)
	 push(j);
 	 if(j==41&&pop()==40)
	 printf("right");
	 if (j==125&&pop()==123)
	 printf("right\n");
     if((j==41&&pop()!=40)||(j==125&&pop()!=123))
     printf("Parenteses/braces are not nested properly\n");
	}
	return 0;
}