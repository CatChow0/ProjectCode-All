#include <stdio.h>

int main () {


    char a;
    printf("entrez une lettre : \n");

    scanf("%c", &a);

    int ascii = a;

    printf("%c = %d", a, ascii);

    return 0;
}