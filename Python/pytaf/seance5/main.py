def tri_selection(crepe_def):
    for i in range(len(crepe_def)):
        min = i
        for j in range(i+1, len(crepe_def)):
            if crepe_def[min]> crepe_def[j]:
                min = j
        tmp = crepe_def[i]
        crepe_def[i] = crepe_def[min]
        crepe_def[min] = tmp
    return crepe_def

# def tri_bulle(tab):
#     n = len(tab)
#     # Traverser tous les éléments du tableau
#     for i in range(n):
#         for j in range(0, n-i-1):
#             # échanger si l'élément trouvé est plus grand que le suivant
#             if tab[j] > tab[j+1] :
#                 tab[j], tab[j+1] = tab[j+1], tab[j]
# # Programme principale pour tester le code ci-dessus
# tab = [98, 22, 15, 32, 2, 74, 63, 70]
 
# tri_bulle(tab)
 
# print ("Le tableau trié est:")
# for i in range(len(tab)):
#     print ("%d" %tab[i])

rank = [1,2,3,4,5,6]
crepe_def = ['Crêpe Confiture Fraise - 5.90 € - Sucrée\nSucre Glace, Confiture fraise','Crêpe Nutela - 6.90 € - Sucrée\nNutela, Chantilly','Crêpe Sarasin au trois fromage - 7.90 € - Végétarienne\nFromage de chèvre, mozzarella, cheddar','Crêpe Jambon Fromage - 8.90 € - Salée\n Jambon, Ananas, Fromage','Crêpe Kebab Poulet - 8.90 € - Salée\n Kebab, Poulet, Tomate, Émentale','Crêpe personalisée']
Liste_menu = ['Afficher la liste de crêpes par ordre alphabetique', 'Afficher la liste de crêpes par prix croissant', 'Crêpe la plus chère', 'Crêpe la moins chère']
pimp = 'Crêpe personalisée'

for i in range (4):
    print(f'{rank[i]}'+'. '+ f'{Liste_menu[i]}') 
menu = int(input('Choisissez une option: '))
if menu == 1 :
    tri_selection(crepe_def)
    for i in range(len(crepe_def)):
        print(f'{rank[i]}'+'. '+ f'{crepe_def[i]}')
if menu == 2 :
    print("2")
if menu == 3 :
    print("3")
if menu == 4 :
    print("4")
if menu >4 or menu <1 :
    print("0")
    
