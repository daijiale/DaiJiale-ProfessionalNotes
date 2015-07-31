//第二次综合实验——超市商品信息管理系统 
//程序员：戴嘉乐
//学号：2012221010021
//班级：信息工程一班 
//时间：2012年12月20号 

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define STU_INFO_FILE	"E:\\goodinfo.txt" //定义文本信息存储路径 
#define	MAX 100
#define TRUE	1
#define	FALSE	0

unsigned current;             //定义全局无符号参数current表示文本中商品实际数量 

typedef struct {
	char good_id[30];
	char good_name[30];
	char good_price[10];
	char good_discount[10];
	int good_amount;
	int good_remain;
}GoodInfo;                                  //声明结构

GoodInfo  *Goods[MAX];

void GoodInfo_NULL()         //定义一个将*Goods[MAX]初始化为NULL的函数 
{    
    unsigned i;
	for(i=0; i<MAX; ++i){
		Goods[i] = NULL;
	}
}


GoodInfo* readGoodInfo(FILE* fp)      //文件单行信息读取的函数 
{
	GoodInfo* pGoodInfo = (GoodInfo*)malloc(sizeof(GoodInfo));  //分配动态内存 
	fscanf(fp,"%s%s%s%s%d%d",&pGoodInfo->good_id,&pGoodInfo->good_name,&pGoodInfo->good_price,
		&pGoodInfo->good_discount,&pGoodInfo->good_amount,&pGoodInfo->good_remain);
    return pGoodInfo;
}



void info_init()                     //将多条文本文件信息读入的函数 
{
	FILE* fp;
	unsigned i=0;
	
    fp= fopen(STU_INFO_FILE, "r");
	
	if(!fp)
	{
		printf("读取系统失败!\n");
		exit(-1);
	}
	printf("欢迎进入超市商品信息管理系统!\n");
	printf("程序员：戴嘉乐\n");
	printf("辅导老师：潘晔\n");
	
	for (i = 0;!feof(fp); i++,current++)
	{
		Goods[i]=readGoodInfo(fp);
	}                          //将分配到的内存指针分别保存至定义的指针数组中 
     fclose(fp);
}



void info_dele()                            //"删除"函数 
{
	unsigned i; 
	unsigned j;
	char mingchen[30];
	printf("输入你要删除商品的名称：");
	scanf("%s",mingchen);getchar(); //getchar()将多余输入的空白字符抹去,不影响之后的内存分配 
	for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//用strcmp比较字符串大小，等于0就判断出来商品是否存在了// 
	 {	
	free(Goods[i]);                  //用free函数释放所要删除元素的内存 
	Goods[i]=NULL;                   //删除元素信息 
	for(j=i;j<current;j++)
	 {
	  Goods[j]=Goods[j+1];           //将指针移位,不改变商品ID 
	  }
    current--;
	printf("删除成功.\n");
	return;
	 }
	}
	printf("该商品不存在，请重新输入");
	

}

void info_output(unsigned i)                 //输出文本单行信息的函数 
{       
		printf("商品ID为%s\n,商品名字为%s\n,商品价格为%s\n,商品折扣为%s\n,商品数量为%d\n,商品库存为%d\n",
		Goods[i]->good_id, 
		Goods[i]->good_name,
		Goods[i]->good_price, 
		Goods[i]->good_discount,
		Goods[i]->good_amount,
        Goods[i]->good_remain)
		;		

}


void info_search()                        //"搜索"函数 
{  
   	unsigned i;
    char mingchen[30];
	printf("输入你要删除商品的名称：");
    scanf("%s",mingchen);getchar();
   for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//用strcmp比较字符串大小，等于0就判断出来是否存在了// 
	info_output(i);
	} 
}




void OutputAll()                         //输出文本全部信息的函数 
{
	unsigned i;
	
	for(i = 0; i < current; i++)
	{
		info_output(i);
	}
}


void info_change()                      //修改商品信息的函数 
{
	unsigned i;
	char mingchen[30],id[30],name[30],price[30],discount[10];
	int amount,remain;
	printf("输入你要修改商品的名称：");
	scanf("%s",mingchen);
	for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//用strcmp比较字符串大小，等于0就判断出来是否存在了// 
	  {
	printf("输入新的商品信息（以换行区分信息条目）：\n");
	scanf("%s%s%s%s%d%d",id,name,price,discount,&amount,&remain); 
	getchar();     //getchar()将多余输入的空白字符抹去,不影响之后的内存分配 
	strcpy(Goods[i]->good_id,id);
	strcpy(Goods[i]->good_name,name);
	strcpy(Goods[i]->good_price,price);
	strcpy(Goods[i]->good_discount,discount);
	Goods[i]->good_amount=amount;
	Goods[i]->good_remain=remain;
	printf("修改商品信息成功！\n");
	OutputAll();
	return;
      }
    }
	
	printf("没有此商品，请重新输入\n");
	
}

void info_insert()                 //"插入"函数 
{
	
	char id[30],name[30],price[10],discount[10];
	int amount,remain;
    printf("输入你要插入的商品信息：\n");
    scanf("%s%s%s%s%d%d",id,name,price,discount,&amount,&remain); 
	GoodInfo *G = (GoodInfo*)malloc(sizeof(GoodInfo));
	Goods[current]=G;              
	strcpy(Goods[current]->good_id,id);
	strcpy(Goods[current]->good_name,name);
	strcpy(Goods[current]->good_price,price);
	strcpy(Goods[current]->good_discount,discount);
	Goods[current]->good_amount=amount;
	Goods[current]->good_remain=remain;
	current++;
	printf("商品信息插入成功！\n");
	
	
}		   


void info_flush()                           //"保存"函数 
{
    FILE* fp;
    unsigned i;
	fp=fopen(STU_INFO_FILE,"w");
	for(i=0;i<current;i++)
	{
		fprintf(fp,"%s",Goods[i]->good_id);
		fprintf(fp,"\t%s",Goods[i]->good_name);
		fprintf(fp,"\t%s",Goods[i]->good_price);
		fprintf(fp,"\t%s",Goods[i]->good_discount);
		fprintf(fp,"\t%d",Goods[i]->good_amount);
		fprintf(fp,"\t%d\n",Goods[i]->good_remain);
	}
	fclose(fp);
}


void freeGoodInfo()                    //释放指针数组全部内存的函数                         
{    
    unsigned i;
	for(i=0; i<MAX; ++i){
		free(Goods[i]);
		Goods[i] = NULL;
	}
}


int main()
{
	int command_number;
    GoodInfo_NULL();
	info_init();                               
    while(1)
	{   
        printf("\n");
		printf("==========================菜单================================\n\n");
 	    printf("**************亲，输入数字 0 打开商品信息列表*****************\n\n");
		printf("**************亲，输入数字 1 修改商品信息列表*****************\n\n");
		printf("**************亲，输入数字 2 删除商品信息*********************\n\n");
		printf("**************亲，输入数字 3 查找新商品信息*******************\n\n");
		printf("**************亲，输入数字 4 插入某个商品信息*****************\n\n");
		printf("**************亲，输入数字 5 退出本程序***********************\n\n");
	    printf("==============================================================\n\n");
		printf("输入菜单选项，按回车进行下一步：");
		scanf("%d",&command_number);
		switch(command_number)
		{
		
		case 0:
		{
			OutputAll();
			printf("\n");
			break;
		} 
		case 1:
			{
				printf("修改商品信息列表 \n");
				info_change();
				break;
			}
		case 2:
			{
				printf("删除商品信息\n");
				info_dele();
				break;
			}
		case 3:
			{
				printf("查找新商品信息\n");
				info_search();
			break;
			}
		case 4:
			{
				printf("插入某个商品信息\n");
				info_insert();
				break;
			}
		case 5:
		    info_flush();
			freeGoodInfo();
			return 0;
		default:
			printf("非法命令\n");
		    break;
		}
	}
	return	0;
}
