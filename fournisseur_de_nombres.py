import random
import string
mon_fichier = open("fichier.txt", "w")
b=' '
gh=0
th= 0
for i in range(0,10):
    while(gh!=10):
        liste = []
        for i in range(0,17):
            liste.append( random.choice(string.ascii_letters) )

        a = random.randint(1,16)
        for i in range (0,a):
            c = liste[i]
            b= b+ c
        b = b+ ' '
        mon_fichier.write(str(b))
  
        gh = gh+1
        del liste[0:16]
        b= ' '
    mon_fichier.write("\n")
    th = th+1
mon_fichier.close()
    
