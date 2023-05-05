#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_ETOILE 100

// void swap(int* a, int* b) {

//     printf("\n Avant %d %d", *a ,*b);

//     int tmp = *a; //tmp prend la valeur de la case memoire a
//     *a = *b;
//     *b = tmp;

//     printf("\nApres %d %d", *a ,*b);

// }

// void minMax(int *tab, int size) {
//     int tmp;

//     for(int i=0; i < size; i++) {
//         printf("\n%4d", tab[i]);
//     }

//     for (int i=0; i < size-1; i++) {
//         for (int j = 0; j < size-i-1;j++) {
//             if (tab[j] > tab[j+1]) {
//                 tmp = tab[j];
//                 tab[j] = tab[j+1];
//                 tab[j+1] = tmp;

//             }
//         }
//     }

//     for(int i=0; i < size; i++) {
//         printf("\n%4d", tab[i]);
//     }

//     printf("\n min : %d; max : %d", tab[0], tab[size-1]);

//     return;
// }

// void file() {

//     FILE* pt_fichier = fopen("truc.txt", "a");

//     int nb_lignes, centre_ligne;
//     int i;
//     char ligne[MAX_ETOILE];

//     printf("Entrez le nombre de lignes d'etoiles que vous voulez dans la pyramide: ");
//     scanf("%d", &nb_lignes);

//     for(i = 0; i < nb_lignes; i++) {
//         ligne[i] = ' ';
//     }
//     ligne[MAX_ETOILE - 1] = '\0';
//     centre_ligne = nb_lignes - 1;
//     for(i = 0; i < nb_lignes; i++) {
//         ligne[centre_ligne - i] = '*';
//         ligne[centre_ligne + i] = '*';

//         if(fputs(ligne, pt_fichier )!= 0){
//             printf("Error");
//         }
//         if(fputs("\n", pt_fichier) != 0){
//             printf("Error");
//         }

//         printf("%s\n", ligne);
//     }


//     return;
// }

void createArray(){

    int col,lig,size;

    printf("nb col et nb lig : ");
    scanf("%d %d", &col,&lig);

    

    return;
}

int main () {

    // swap
    // int a = 10, b = 20;
    // swap(&a, &b);

    // printf("\nEntre 2 nombres: \n");
    // scanf("%d %d", &a,&b);
    // printf("\n%d %d", a, b);

    // swap(&a,&b);

    // min Max

    // int size = 5,Tab[] = {159,20,3,40,5};
    // minMax(&Tab,size);

    //pyramide

    // file();

    // array

    createArray();

    return 0;
}