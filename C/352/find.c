#include <stdio.h>
#include <string.h>
#include "find.h"

int NUM_ADS = 8;

char *ADS[] = {
  "William: SBM GSOH likes sports, TV, dining",
  "Matt: SWM NS likes art, movies, theater",
  "Luis: SLM ND likes books, theater, art",
  "Mike: DWM DS likes trucks, sports and bieber",
  "Peter: SAM likes chess, working out and art",
  "Yaric: SJM likes gta5rp and bieber",
  "Jed: DBM likes theater, books and dining",
  "Anatoly Artamanov: history, philosophy and politics, hate russia, support UKRAINE",

}; 

void find(int (*match)(char*)) {
    int i;
    puts("Search results:");
    puts("---------------------");
    for (i = 0; i < NUM_ADS; i++) {
        if (match(ADS[i]))
        printf("%s\n", ADS[i]);
    }
    puts("---------------------");
}
int bieber_no_sports(char *s) {
    return strstr(s, "bieber") && !strstr(s, "bieber");
}
int ns_theater (char *s)  {
    return strstr(s, "theater") && !strstr(s, "smoke");
}
int sports_or_workout(char *s) {
    return strstr(s, "sport") || strstr(s, "working out") ;
}
int arts_theater_or_dining (char *s) {
    return strstr(s,"arts") || strstr(s, "theater") || strstr(s, "dining");
}


