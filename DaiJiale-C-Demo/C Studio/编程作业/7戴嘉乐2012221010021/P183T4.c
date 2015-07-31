//*程序员：戴嘉乐*//
//*2012年12月9日*//

#include <stdbool.h>   
#include <stdio.h>
#include <stdlib.h>
#define NUM_CARDS 5
#define RANK 0
#define SUIT 1


int hand[NUM_CARDS][2];



void read_cards(void);
void analyze_hand(int *p_st,int *p_fl,int *p_fo,int *p_th,int *p_pa);
void print_result(int *p_st,int *p_fl,int *p_fo,int *p_th,int *p_pa);

int main(void)
{
  bool straight, flush, four, three;
  int pairs,*p_st,*p_fl,*p_fo,*p_th,*p_pa;
  p_st=&straight;
  p_fl=&flush;
  p_fo=&four;
  p_th=&three;
  p_pa=&pairs;
    for (;;) {
    read_cards();
    analyze_hand(*p_st,*p_fl,*p_fo,*p_th,*p_pa);
    print_result(*p_st,*p_fl,*p_fo,*p_th,*p_pa);
  }
}

void read_cards(void)
{
  char ch, rank_ch, suit_ch;
  int i, rank, suit;
  bool bad_card, duplicate_card;
  int cards_read = 0;

  while (cards_read < NUM_CARDS) {
    bad_card = false;

    printf("Enter a card: ");

    rank_ch = getchar();
    switch (rank_ch) {
      case '0':           exit(EXIT_SUCCESS);
      case '2':           rank = 0; break;
      case '3':           rank = 1; break;
      case '4':           rank = 2; break;
      case '5':           rank = 3; break;
      case '6':           rank = 4; break;
      case '7':           rank = 5; break;
      case '8':           rank = 6; break;
      case '9':           rank = 7; break;
      case 't': case 'T': rank = 8; break;
      case 'j': case 'J': rank = 9; break;
      case 'q': case 'Q': rank = 10; break;
      case 'k': case 'K': rank = 11; break;
      case 'a': case 'A': rank = 12; break;
      default:            bad_card = true;
    }

    suit_ch = getchar();
    switch (suit_ch) {
      case 'c': case 'C': suit = 0; break;
      case 'd': case 'D': suit = 1; break;
      case 'h': case 'H': suit = 2; break;
      case 's': case 'S': suit = 3; break;
      default:            bad_card = true;
    }

    while ((ch = getchar()) != '\n')
      if (ch != ' ') bad_card = true;

    if (bad_card) {
      printf("Bad card; ignored.\n");
      continue;
    }

    duplicate_card = false;
    for (i = 0; i < cards_read; i++)
      if (hand[i][RANK] == rank && hand[i][SUIT] == suit) {
        printf("Duplicate card; ignored.\n");
        duplicate_card = true;
        break;
      }

    if (!duplicate_card) {
      hand[cards_read][RANK] = rank;
      hand[cards_read][SUIT] = suit;
      cards_read++;
    }
  }
}

void analyze_hand(int *p_st,int *p_fl,int *p_fo,int *p_th,int *p_pa)
{
  int rank, suit, card, pass, run;

  *p_st= true;
  *p_fl = true;
  *p_fo = false;
  *p_th = false;
  *p_pa = 0;

  for (pass = 1; pass < NUM_CARDS; pass++)
    for (card = 0; card < NUM_CARDS - pass; card++) {
      rank = hand[card][RANK];
      suit = hand[card][SUIT];
      if (hand[card+1][RANK] < rank) {
        hand[card][RANK] = hand[card+1][RANK];
        hand[card][SUIT] = hand[card+1][SUIT];
        hand[card+1][RANK] = rank;
        hand[card+1][SUIT] = suit;
      }
    }

  suit = hand[0][SUIT];
  for (card = 1; card < NUM_CARDS; card++)
    if (hand[card][SUIT] != suit)
      *p_fl = false;

  for (card = 0; card < NUM_CARDS - 1; card++)
    if (hand[card][RANK] + 1 != hand[card+1][RANK])
      *p_st = false;

  card = 0;
  while (card < NUM_CARDS) {
    rank = hand[card][RANK];
    run = 0;
    do {
      run++;
      card++;
    } while (card < NUM_CARDS && hand[card][RANK] == rank);
    switch (run) {
      case 2: *p_pa++;      break;
      case 3: *p_th=true; break;
      case 4: *p_fo=true;  break;
    }
  }
}

void print_result(int *p_st,int *p_fl,int *p_fo,int *p_th,int *p_pa)
{
  if (*p_st && *p_fl) printf("Straight flush");
  else if (*p_fo)         printf("Four of a kind");
  else if (*p_th &&
           *p_pa==1)   printf("Full house");
  else if (*p_fl)        printf("Flush");
  else if (*p_st)     printf("Straight");
  else if (*p_th)        printf("Three of a kind");
  else if (*p_pa==2)   printf("Two pairs");
  else if (*p_pa==1)   printf("Pair");
  else                   printf("High card");

  printf("\n\n");
}