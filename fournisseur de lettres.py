import random
import string
a= random.randint(10,16)
b=0
c =0
#liste = []
#for i in range(10):
#    liste.append( random.randint(1,16) )
while(b!=a):
    for i in range (0,random.randint(1,16)):
        mon_fichier = open("fichier.txt", "w")
        mon_fichier.write(random.choice(string.ascii_letters))
        50
        mon_fichier.close()
    mon_fichier = open("fichier.txt", "w")
    mon_fichier.write(' ')
    50
    mon_fichier.close()
    b= b+1
    

#mon_fichier = open("fichier.txt", "w")
#mon_fichier.write("Premier test d'écriture dans un fichier via Python")
#50
#mon_fichier.close()
