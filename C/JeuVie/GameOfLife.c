#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>  //Librairi Pour les Booléen
#include <time.h>     //Librairi Integration Temps
#include <SDL2/SDL.h> //Librairi Interface Graphique

// --------------------------------------------------------- //
// Defini la taille de l'affichage et la taille des cellules //
// --------------------------------------------------------- //

#define RENDER_WIDTH 1920
#define RENDER_HEIGHT 1080
#define CELL_SIZE 3

// --------------------------------- //
// Defini la grille du jeu de la vie //
// --------------------------------- // 

int SCREEN_WIDTH = 1280;    // Taille de l'affichage
int SCREEN_HEIGHT = 720;    // Taille de l'affichage

int grid[RENDER_HEIGHT/CELL_SIZE][RENDER_WIDTH/CELL_SIZE];
int new_grid[RENDER_HEIGHT/CELL_SIZE][RENDER_WIDTH/CELL_SIZE];

// ---------------- //
// Autres Variables //
// ---------------- //

int num = 1;        // Nombre comptant les générations déjà passé
int Choix = 0;      // Choix de l'utilisateur pour continuer ou arreter

// ----------------------------------------- //
// Place les cellules initiale sur la grille //
// ----------------------------------------- //

void init_grid() {
    srand(time(NULL));
    for(int i = 0; i < SCREEN_HEIGHT/CELL_SIZE; i++) {
        for(int j = 0; j < SCREEN_WIDTH/CELL_SIZE; j++) {
            grid[i][j] = rand() % 2;
        }
    }
}

// ------------------------------------- //
// Compte le nombre de cellules voisines //
// ------------------------------------- //

int count_neighbors(int x, int y) {
    int count = 0;
    for(int i = -1; i <= 1; i++) {
        for(int j = -1; j <= 1; j++) {
            if(i == 0 && j == 0) continue;
            int ni = (x + i + SCREEN_HEIGHT/CELL_SIZE) % (SCREEN_HEIGHT/CELL_SIZE);
            int nj = (y + j + SCREEN_WIDTH/CELL_SIZE) % (SCREEN_WIDTH/CELL_SIZE);
            if(grid[ni][nj]) count++;
        }
    }
    return count;
}

// -------------------------------------------------------------------- //
// Acualise la grille du jeu en fontion du nombre de voisin par cellule //
// -------------------------------------------------------------------- //

void update_grid() {
    for(int i = 0; i < SCREEN_HEIGHT/CELL_SIZE; i++) {
        for(int j = 0; j < SCREEN_WIDTH/CELL_SIZE; j++) {
            int count = count_neighbors(i, j);

            // --------------------------------------------------- //
            // Verifie qu'il n'y ait pas trop de cellules voisines //
            // --------------------------------------------------- //

            if(grid[i][j]) {
                if(count < 2 || count > 3) {
                    new_grid[i][j] = 0; // Si trop ou pas assez de cellules voisines, tue la cellule
                } else {
                    new_grid[i][j] = 1; // Sinon, la cellule vie
                }
            } else {
                if(count == 3) {
                    new_grid[i][j] = 1; // Si y'a assez de cellules voisines, la cellule vie
                } else {
                    new_grid[i][j] = 0; // Sinon, la cellule est tue
                }
            }
        }
    }

    // --------------------------------------------------------------- //
    // Actualise la grille par rapport au nombre de voisin par cellule //
    // --------------------------------------------------------------- //

    for(int i = 0; i < SCREEN_HEIGHT/CELL_SIZE; i++) {
        for(int j = 0; j < SCREEN_WIDTH/CELL_SIZE; j++) {
            grid[i][j] = new_grid[i][j];
        }
    }
}

// -------------------------- //
// Affiche la grille actuelle //
// -------------------------- //

void draw_grid(SDL_Renderer* renderer) {
    SDL_SetRenderDrawColor(renderer, 0,0,0,255);         // Couleur de l'arrière plan
    SDL_RenderClear(renderer);                              // Fait le rendu de l'arrière plan
    SDL_SetRenderDrawColor(renderer, 255, 255, 255, 255);   // Couleur des cellules

    // ---------------------------------- //
    // Dessine les cellules sur la grille //
    // ---------------------------------- //

    for(int i = 0; i < SCREEN_HEIGHT/CELL_SIZE; i++) {
        for(int j = 0; j < SCREEN_WIDTH/CELL_SIZE; j++) {
            if(grid[i][j]) {
                SDL_Rect rect = { j*CELL_SIZE, i*CELL_SIZE, CELL_SIZE, CELL_SIZE };
                SDL_RenderFillRect(renderer, &rect);
            }
        }
    }
}

// --------------------------------------------------------------------- //
// Initialise Le jeu en appellant les fonctions d'affichage et de grille //
// --------------------------------------------------------------------- //

int main(int argc, char* argv[]) {

    // --------------------------------- //
    // Choix de la taille de l'affichage //
    // --------------------------------- //

    int screen_size;
    printf("Choisissez la taille de l'affichage: \n1: 480p\n2: 720p (default) \n3: 1080p\n");
    scanf("%d", &screen_size);

    if (screen_size == 1) {
        SCREEN_HEIGHT = 480; 
        SCREEN_WIDTH = 704;
    } else if (screen_size == 2) {
        SCREEN_HEIGHT = 720;
        SCREEN_WIDTH = 1280;
    } else if (screen_size == 3) {
        SCREEN_HEIGHT = 1080;
        SCREEN_WIDTH = 1920;
    } else if (screen_size > 3 || screen_size < 1) { // Taille par defaut 720p
        SCREEN_HEIGHT = 720;
        SCREEN_WIDTH = 1280;
        printf("\nErreur /!\\ la taille par defaut a été appliqué.");
    }

    // ---------------------- //
    // Crée la fenetre de jeu //
    // ---------------------- //

    SDL_Init(SDL_INIT_VIDEO);

    SDL_Window* window = SDL_CreateWindow("Jeu de la Vie", SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED, SCREEN_WIDTH, SCREEN_HEIGHT, SDL_WINDOW_SHOWN);
    SDL_Renderer* renderer = SDL_CreateRenderer(window, -1, SDL_RENDERER_ACCELERATED);

    init_grid(); // Crée la grille initiale

    // ------------- //
    // Boucle du Jeu //
    // ------------- //

    int generation = 0;

    while(1) { 
        SDL_Event event;
        while(SDL_PollEvent(&event)) {
            if(event.type == SDL_QUIT) {
                SDL_Quit();
                return 0;
            }
        }
        update_grid();                  // Met a jour la grille
        draw_grid(renderer);            // Rendu de la grille
        SDL_RenderPresent(renderer);    // Rendu de l'affichage actuelle
        SDL_Delay(1);                   // Temps entre chaque génération de cellules
        generation++;

        // printf("Generation %d\n", generation); // Affiche la génération actuelle de cellules

        // -------------------------------------------- //
        // Demande a l'utilisateur si il veux continuer //
        // -------------------------------------------- //

        if(num == 1000) {
            printf("Nous somme a la generation %d\nVoulez vous ARRETER ici ou CONTINUER simulation :\n1. Arreter\n2. Continuer\n Veuillezentrez le chiffre de l'option choisie: ", generation);
            scanf("%d", &Choix);

            if(Choix == 1) {    // Arrete le programme
                return 0;
            } else if (Choix == 2) { 
                num = 1;
            }


        } else if (num < 1000) {
            num++;
            // printf("\nnum %d", num); Affiche la valeur actuelle du num
        } else if (num > 1000) {
            num = 1;
        }
    } 
}
