import random

pv_pla = 50
pv_mob = 50
pot = 3
while pv_pla >0 or pv_mob >0:
    act = int(input('Début de votre tour.\nSouhaitez-vous att_plaaquer (1) ou utiliser une potion (2) ?: '))
    if act == 1:
        att_pla = random.randint(5,10)
        pv_mob = pv_mob - att_pla
        print(f'Vous avez infilgé {att_pla} dégât, les pv du monstre sont de {pv_mob}')
        att_mob = random.randint(5,15)
        pv_pla = pv_pla - att_mob
        print(f'L\'ennemie vous a infligé {att_mob} dégât, vos pv sont de {pv_pla}' )
    if act == 2 and pot>0:
        pot_eff = random.randint(15,50)
        pv_pla = pv_pla + pot_eff
        att_mob = random.randint(5,15)
        pv_pla = pv_pla - att_mob
        print(f'L\'ennemie vous a infligé {att_mob} dégât, vos pv sont de {pv_pla}' )
        print(f'Vous avez utilisez une potion et récuprer {pot_eff} pv')
    if act == 0 or act >2:
        print('Choisissez une option valide')

