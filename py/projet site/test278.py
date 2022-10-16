#module de base
from tkinter import *
import webbrowser
from math import *


def open_nikezebi_site():
       webbrowser.open_new("https://sites.google.com/view/nikezebi/accueil")




#creer une premiere fenetre
fenetre = Tk()


#personaliser la fenetre
fenetre.title("a moi")
fenetre.geometry("1080x720")
fenetre.minsize(480,360)
fenetre.iconbitmap("The_Two_Faces_of_Squidward_24_large.ico")
fenetre.config(background='#2BBC88')

#creer la frame
frame = Frame(fenetre, bg='#2BBC88')

#ajouter un premier texte
label_title = Label(frame, text="Salam chakal", font=("Arial", 40), bg='#2BBC88', fg='white')
label_title.pack()

#ajouter un second texte
label_subtitle = Label(frame, text="met toi bien", font=("Arial", 25), bg='#2BBC88', fg='white')
label_subtitle.pack()

#ajouter un premier bouton
r_button = Button(frame, text="Poutre", font=("Arial", 40), bg='white', fg='#2BBC88', command=open_nikezebi_site)
r_button.pack(pady=25, fill=X)

#ajouter frame
frame.pack(expand=YES)

#afficher
fenetre.mainloop()
