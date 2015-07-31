//�ڶ����ۺ�ʵ�顪��������Ʒ��Ϣ����ϵͳ 
//����Ա��������
//ѧ�ţ�2012221010021
//�༶����Ϣ����һ�� 
//ʱ�䣺2012��12��20�� 

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define STU_INFO_FILE	"E:\\goodinfo.txt" //�����ı���Ϣ�洢·�� 
#define	MAX 100
#define TRUE	1
#define	FALSE	0

unsigned current;             //����ȫ���޷��Ų���current��ʾ�ı�����Ʒʵ������ 

typedef struct {
	char good_id[30];
	char good_name[30];
	char good_price[10];
	char good_discount[10];
	int good_amount;
	int good_remain;
}GoodInfo;                                  //�����ṹ

GoodInfo  *Goods[MAX];

void GoodInfo_NULL()         //����һ����*Goods[MAX]��ʼ��ΪNULL�ĺ��� 
{    
    unsigned i;
	for(i=0; i<MAX; ++i){
		Goods[i] = NULL;
	}
}


GoodInfo* readGoodInfo(FILE* fp)      //�ļ�������Ϣ��ȡ�ĺ��� 
{
	GoodInfo* pGoodInfo = (GoodInfo*)malloc(sizeof(GoodInfo));  //���䶯̬�ڴ� 
	fscanf(fp,"%s%s%s%s%d%d",&pGoodInfo->good_id,&pGoodInfo->good_name,&pGoodInfo->good_price,
		&pGoodInfo->good_discount,&pGoodInfo->good_amount,&pGoodInfo->good_remain);
    return pGoodInfo;
}



void info_init()                     //�������ı��ļ���Ϣ����ĺ��� 
{
	FILE* fp;
	unsigned i=0;
	
    fp= fopen(STU_INFO_FILE, "r");
	
	if(!fp)
	{
		printf("��ȡϵͳʧ��!\n");
		exit(-1);
	}
	printf("��ӭ���볬����Ʒ��Ϣ����ϵͳ!\n");
	printf("����Ա��������\n");
	printf("������ʦ������\n");
	
	for (i = 0;!feof(fp); i++,current++)
	{
		Goods[i]=readGoodInfo(fp);
	}                          //�����䵽���ڴ�ָ��ֱ𱣴��������ָ�������� 
     fclose(fp);
}



void info_dele()                            //"ɾ��"���� 
{
	unsigned i; 
	unsigned j;
	char mingchen[30];
	printf("������Ҫɾ����Ʒ�����ƣ�");
	scanf("%s",mingchen);getchar(); //getchar()����������Ŀհ��ַ�Ĩȥ,��Ӱ��֮����ڴ���� 
	for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//��strcmp�Ƚ��ַ�����С������0���жϳ�����Ʒ�Ƿ������// 
	 {	
	free(Goods[i]);                  //��free�����ͷ���Ҫɾ��Ԫ�ص��ڴ� 
	Goods[i]=NULL;                   //ɾ��Ԫ����Ϣ 
	for(j=i;j<current;j++)
	 {
	  Goods[j]=Goods[j+1];           //��ָ����λ,���ı���ƷID 
	  }
    current--;
	printf("ɾ���ɹ�.\n");
	return;
	 }
	}
	printf("����Ʒ�����ڣ�����������");
	

}

void info_output(unsigned i)                 //����ı�������Ϣ�ĺ��� 
{       
		printf("��ƷIDΪ%s\n,��Ʒ����Ϊ%s\n,��Ʒ�۸�Ϊ%s\n,��Ʒ�ۿ�Ϊ%s\n,��Ʒ����Ϊ%d\n,��Ʒ���Ϊ%d\n",
		Goods[i]->good_id, 
		Goods[i]->good_name,
		Goods[i]->good_price, 
		Goods[i]->good_discount,
		Goods[i]->good_amount,
        Goods[i]->good_remain)
		;		

}


void info_search()                        //"����"���� 
{  
   	unsigned i;
    char mingchen[30];
	printf("������Ҫɾ����Ʒ�����ƣ�");
    scanf("%s",mingchen);getchar();
   for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//��strcmp�Ƚ��ַ�����С������0���жϳ����Ƿ������// 
	info_output(i);
	} 
}




void OutputAll()                         //����ı�ȫ����Ϣ�ĺ��� 
{
	unsigned i;
	
	for(i = 0; i < current; i++)
	{
		info_output(i);
	}
}


void info_change()                      //�޸���Ʒ��Ϣ�ĺ��� 
{
	unsigned i;
	char mingchen[30],id[30],name[30],price[30],discount[10];
	int amount,remain;
	printf("������Ҫ�޸���Ʒ�����ƣ�");
	scanf("%s",mingchen);
	for(i=0;i<current;i++)
	{
	if(strcmp(mingchen,Goods[i]->good_name)==0)//��strcmp�Ƚ��ַ�����С������0���жϳ����Ƿ������// 
	  {
	printf("�����µ���Ʒ��Ϣ���Ի���������Ϣ��Ŀ����\n");
	scanf("%s%s%s%s%d%d",id,name,price,discount,&amount,&remain); 
	getchar();     //getchar()����������Ŀհ��ַ�Ĩȥ,��Ӱ��֮����ڴ���� 
	strcpy(Goods[i]->good_id,id);
	strcpy(Goods[i]->good_name,name);
	strcpy(Goods[i]->good_price,price);
	strcpy(Goods[i]->good_discount,discount);
	Goods[i]->good_amount=amount;
	Goods[i]->good_remain=remain;
	printf("�޸���Ʒ��Ϣ�ɹ���\n");
	OutputAll();
	return;
      }
    }
	
	printf("û�д���Ʒ������������\n");
	
}

void info_insert()                 //"����"���� 
{
	
	char id[30],name[30],price[10],discount[10];
	int amount,remain;
    printf("������Ҫ�������Ʒ��Ϣ��\n");
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
	printf("��Ʒ��Ϣ����ɹ���\n");
	
	
}		   


void info_flush()                           //"����"���� 
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


void freeGoodInfo()                    //�ͷ�ָ������ȫ���ڴ�ĺ���                         
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
		printf("==========================�˵�================================\n\n");
 	    printf("**************�ף��������� 0 ����Ʒ��Ϣ�б�*****************\n\n");
		printf("**************�ף��������� 1 �޸���Ʒ��Ϣ�б�*****************\n\n");
		printf("**************�ף��������� 2 ɾ����Ʒ��Ϣ*********************\n\n");
		printf("**************�ף��������� 3 ��������Ʒ��Ϣ*******************\n\n");
		printf("**************�ף��������� 4 ����ĳ����Ʒ��Ϣ*****************\n\n");
		printf("**************�ף��������� 5 �˳�������***********************\n\n");
	    printf("==============================================================\n\n");
		printf("����˵�ѡ����س�������һ����");
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
				printf("�޸���Ʒ��Ϣ�б� \n");
				info_change();
				break;
			}
		case 2:
			{
				printf("ɾ����Ʒ��Ϣ\n");
				info_dele();
				break;
			}
		case 3:
			{
				printf("��������Ʒ��Ϣ\n");
				info_search();
			break;
			}
		case 4:
			{
				printf("����ĳ����Ʒ��Ϣ\n");
				info_insert();
				break;
			}
		case 5:
		    info_flush();
			freeGoodInfo();
			return 0;
		default:
			printf("�Ƿ�����\n");
		    break;
		}
	}
	return	0;
}
