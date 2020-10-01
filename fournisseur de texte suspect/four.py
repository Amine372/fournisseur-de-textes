import os
import random
import string
import shutil
#os.mkdir('confidentiel_defense_ne_pas_ouvrir')
mon_fichier = open("confidentiel_defense_ne_pas_ouvrir\readme.txt", "w")
mon_fichier.write("\n")
mon_fichier.close()
dossiers= int(input("Combien de dossiers secrets ?"))
for i in range(1,dossiers+1):
    nb__lettre_nom_dossier = random.randint(5,20)
    nom_dossier="_"
    for i in range (1,nb__lettre_nom_dossier+1):
        nom_dossier = nom_dossier+random.choice(string.ascii_letters)
        print(nom_dossier)
