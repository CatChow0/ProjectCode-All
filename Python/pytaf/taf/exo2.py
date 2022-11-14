import random

operateur = ['+', '-', '*', '/']

def selectoperateur(operateur):
    return random.choice(operateur)

def play(x):
    
    tent = 5
    score = 0
    while tent>0:
    
        random_calcP = random.randint(1, x)
        random_calcS = random.randint(1, x)
        ope = selectoperateur(operateur)
        result = input(f'WHAT IS THE RESULT FOR --> {random_calcP} {ope} {random_calcS}: ')

        tent = tent -1
        
        add = '+'
        sub = '-'
        div = '/'
        mul = '*'

        if ope == '+':
            calc = random_calcP + random_calcS
            if calc == int(result) :
                print(f'GOOD JOB {calc} WAS THE RESULT')
                score = score +1
            else :
                print(f'NOPE {result} WASN\'T THE CORRECT ANSWER? {calc} WAS THE CORRECT ONE ')
        if ope == '-':
            calc = random_calcP - random_calcS
            if calc == int(result) :
                print(f'GOOD JOB {calc} WAS THE RESULT')
                score = score +1
            else :
                print(f'NOPE {result} WASN\'T THE CORRECT ANSWER? {calc} WAS THE CORRECT ONE ')
        if ope == '*':
            calc = random_calcP * random_calcS
            if calc == int(result) :
                print(f'GOOD JOB {calc} WAS THE RESULT')
                score = score +1
            else :
                print(f'NOPE {result} WASN\'T THE CORRECT ANSWER? {calc} WAS THE CORRECT ONE ')
        if ope == '/':
            calc = random_calcP / random_calcS
            if calc == int(result) :
                print(f'GOOD JOB {calc} WAS THE RESULT')
                score = score +1
            else :
                print(f'NOPE {result} WASN\'T THE CORRECT ANSWER? {calc} WAS THE CORRECT ONE ')
    if tent == 0 and score == 5:
        print(f'GG MY MAN YOU\'V GOT {score}/5 ')
    if tent == 0 and score == 0:
        print(f'GO BACK TO SCOOL YOU\'V GOT {score}/5 ')
    else :
        print(f'NICE TRY YOU\'V GOT {score}/5 ')
        

play(10)