//*制作人：戴嘉乐*// 
//*2012.11.16*//
//*输入三角形的三边长，输出三角形的面积*// 

#include<stdio.h>
#include<math.h> 
int main()
{
	float side1,side2,side3,s,c;
	printf("输入三角形三边长：");
	scanf("%f,%f,%f",&side1,&side2,&side3);
	c=1.0/2*(side1+side2+side3);
	s=sqrt(c*(c-side1)*(c-side2)*(c-side3));
	printf("输出三角形的面积：%f",s);
	return 0;	 
}
