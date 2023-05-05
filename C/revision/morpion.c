#include <stdio.h>
#define NB_LIG 3
#define NB_COL 3

typedef enum {VIDE, ROND, CROIX} ValeurGrille;
typedef enum {FALSE, TRUE} Boolean;
static ValeurGrille grille[NB_LIG][NB_COL];
static int prochainJoueur = ROND;

void initialiseGrill() {
    int i, j;
    for ( i=0 ; i<NB_LIG ; i++) {
        for ( j=0 ; j<NB_COL ; j++) {
            grille[i][j] = VIDE;
        }
    }
}

void afficheGrille() {
    int i, j;
    for( i=0 ; i<NB_LIG ; i++) {
        for( j=0 ; j<NB_COL ; j++) {
            switch (grille[i][j]) {
            case VIDE:
                printf("_ ");
                break;
            case ROND:
                printf("O ");
                break;
            case CROIX:
                printf("X ");
                break;
            }
        }
        printf("\n");
    }
}

void metUnPionSurLaGrille() {
    int ligne, col;
    Boolean saisiCorrecte = FALSE;

    printf("Numeros de ligne et de colonne: ");

    do {
        scanf("%d %d", &ligne, &col);
        printf("\n");

        if ((ligne > 0) && (ligne <= ))
    }
}