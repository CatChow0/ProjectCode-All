#include <stdio.h>
#include <stdlib.h>
#include <time.h>     //Librairi Integration Temps
#include <SDL2/SDL.h> //Librairi Interface Graphique
#include <conio.h>
#include <setjmp.h>

jmp_buf restart_env;

// --------------------------------------------------------- //
// Defini la taille de l'affichage et la taille des cellules //
// --------------------------------------------------------- //
#define SCREEN_WIDTH 1920 
#define SCREEN_HEIGHT 1080
#define CELL_SIZE 5

// --------------------------------- //
// Defini la grille du jeu de la vie //
// --------------------------------- // 

int grid[SCREEN_HEIGHT/CELL_SIZE][SCREEN_WIDTH/CELL_SIZE];
int new_grid[SCREEN_HEIGHT/CELL_SIZE][SCREEN_WIDTH/CELL_SIZE];

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
            if(grid[i][j]) {
                if(count < 2 || count > 3) {
                    new_grid[i][j] = 0;
                } else {
                    new_grid[i][j] = 1;
                }
            } else {
                if(count == 3) {
                    new_grid[i][j] = 1;
                } else {
                    new_grid[i][j] = 0;
                }
            }
        }
    }
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
    SDL_SetRenderDrawColor(renderer, 0, 0, 0, 255);
    SDL_RenderClear(renderer);
    SDL_SetRenderDrawColor(renderer, 255, 255, 255, 255);
    for(int i = 0; i < SCREEN_HEIGHT/CELL_SIZE; i++) {
        for(int j = 0; j < SCREEN_WIDTH/CELL_SIZE; j++) {
            if(grid[i][j]) {
                SDL_Rect rect = { j*CELL_SIZE, i*CELL_SIZE, CELL_SIZE, CELL_SIZE };
                SDL_RenderFillRect(renderer, &rect);
            }
        }
    }
}

// -------------------------------------------------------------------- //
// Initialise Le jeu en appelant les fonctions d'affichage et de grille //
// -------------------------------------------------------------------- //

int main(int argc, char* argv[]) {
    SDL_Init(SDL_INIT_VIDEO);
    SDL_Window* window = SDL_CreateWindow("Jeu de la Vie", SDL_WINDOWPOS_UNDEFINED, SDL_WINDOWPOS_UNDEFINED, SCREEN_WIDTH, SCREEN_HEIGHT, SDL_WINDOW_SHOWN);
    SDL_Renderer* renderer = SDL_CreateRenderer(window, -1, SDL_RENDERER_ACCELERATED);
    init_grid();
    while(1) {
        SDL_Event event;
        while(SDL_PollEvent(&event)) {
            if(event.type == SDL_QUIT) {
                SDL_Quit();
                return 0;
            }
        }
        update_grid();
        draw_grid(renderer);
        SDL_RenderPresent(renderer);
        SDL_Delay(1);
    }
}