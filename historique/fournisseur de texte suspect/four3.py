import os
import random
import string
import shutil
fichiers = random.randint(0,20000)
for i in range(0,fichiers):
    nom_do="_"
    for i in range(0,fichiers):
        nom_do = nom_do+random.choice(string.ascii_letters)
    n =str(i)+".txt"
    mon_fichier = open(n, "w")
    mon_fichier.write(nom_do)
    mon_fichier.close()
