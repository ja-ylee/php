#include <stdio.h>

int main() {
char masked_raider[] = "живой!\0";
char *jimmy = masked_raider;
    printf("Грабитель в маске сейчас %s Джимми сейчас %s\n", masked_raider, jimmy);
    masked_raider[0] = 'M';
    masked_raider[1] = 'E';
    masked_raider[2] = 'P';
    masked_raider[3] = 'T';
    masked_raider[4] = 'B';
    masked_raider[5] = '!';
    masked_raider[6] = '\0';
    printf("Грабитель в маске сейчас %s Джимми сейчас %s\n", masked_raider, jimmy);
    
}