//*�����ˣ�������*// 
//*2012.11.16*//
//*����ĳ��ĳ��ĳ�գ����ж�����һ��ĵڼ���*// 
//*���磺���������գ�2012/11/11  ���û��س���*// 

#include<stdio.h>
int main()
{
   int year,month,day,sum,leap;
   printf("���������հ���:");
   scanf("%d/%d/%d",&year,&month,&day);
   switch(month)
   {
   	 case 1:sum=0;break;
   	 case 2:sum=31;break;
   	 case 3:sum=59;break;
	 case 4:sum=90;break;
     case 5:sum=120;break;
     case 6:sum=151;break;
     case 7:sum=181;break;
     case 8:sum=212;break;
     case 9:sum=243;break;
     case 10:sum=273;break;
     case 11:sum=304;break;
     case 12:sum=334;break;
     default:printf("���ڴ���");break;
     }
     sum+=day;
	 if(year%400==0||(year%4==0&&year%100!=0))//�ж��ǲ�������//
	 leap=1;
	 else
	 leap=0;
	 if(leap==1&&month>2)
	 sum++;
	 printf("\n\n����һ��ĵ�%d�찡����ľ�У��Բ��ԣ�\n\n",sum);
	 getchar();
	 getchar();
	 return 0;
}
	  
