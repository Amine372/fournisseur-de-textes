import random
import string
mon_fichier = open("fichier.txt", "w")
b=' '
gh=0
while(gh!=10):
    liste = []
    for i in range(0,17):
        liste.append( random.choice(string.ascii_letters) )

    a = random.randint(1,16)
    for i in range (0,a):
        c = liste[i]
        b= b+ c
    b = b+ ' '
    mon_fichier.write("\n" + str(b))
  
    gh = gh+1
    del liste[0:16]
    b= ' '
mon_fichier.close()
    
