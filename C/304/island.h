#ifndef __ISLAND_H
#define __ISLAND_H

typedef struct island {
    char *name;
    char *opens;
    char *closes;           // ostavit
    struct island *next;

} island;

void display(island*);
island* create(char*);

void release(start);

#endif