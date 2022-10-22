//Fonction basique et fonction graphique + temps
#include <iostream> 
#include <SFML/graphics.hpp>
#include <cstdlib>
//simplifie les lignes
using namespace std;
using namespace sf;
//defini la taille de la fenetre
int Size = 20;
int width = Size*Size, height = Size*Size;
int main()
{
    //propriété de la fenetre Taille, nom, fps
    RenderWindow app(VideoMode(width, height),"coucou", Style::Titlebar);
    app.setFramerateLimit(60);
    while (app.isOpen())
    {
        Event event;                                      
        while (app.pollEvent(event)) //ajout d'une touche pour femer la fenetre
        {
            switch(event.type)
            {
            case Event::KeyReleased:
                if(event.key.code == Keyboard::Escape)
                   app.close();
                break;
            }
        }
        app.clear();
        app.display();
    }
}