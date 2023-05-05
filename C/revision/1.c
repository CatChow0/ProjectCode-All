#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <stdbool.h>

int main () {

    printf("Dans l'ordre\n");
    for(int i = 0; i < 26; i++) {
        char letter = 97;
        printf("%c ",letter+i);
    }

    printf("\na l'envers\n");
    for(int i = 0; i < 26; i++) {
        char letter = 122;
        printf("%c ",letter-i);
    }

    printf("\nChiffre\n");
    for(int i = 1; i < 10 ; i++) {
        printf("%d",i);
    }

    printf("\ntruc\n");

    int c = 0;
    int d = 1;
    int u = 2;
    for(int i = 0; i < i+1;i++) {
        if(c != 10 && d != 10 && u != 10)
            printf("%d%d%d, ",c,d,u);
        u++;
        if(u>9 ) {
            d++;
            u = d+1;
            if (d >9) {
                c++;
                d = c+1;
                u = d+1;
                if (c > 9)
                    break ;
            }
        }
    }

    printf("\nTruc 2\n");

    int gg = 0;
    int gd = 0;
    int dg = 0;
    int dd = 1;

    for(int i = 0; i < i+1; i++) {
        if(dd != 10)
            printf("%d%d %d%d, ",gg,gd,dg,dd);
        dd++;
        if (dd > 9) {
            dd = 0;
            dg++;
            if(dg > 9) {
                dg = gg;
                gd++;
                dd = gd +1;
                if(gd > 9) {
                    gg++;
                    gd = 0;
                    dg = gg;
                    dd = gd + 1;
                    if(gg > 9) {
                        break;
                    }
                }
            }
        }
    }

    printf("\nTruc 3\n");

    

    return 0;
}
