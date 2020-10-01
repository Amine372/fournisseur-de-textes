import os
import random
import string
import shutil
fichiers = random.randint(0,20000)
for i in range(0,fichiers):
    n =str(i)+".txt"
    mon_fichier = open(n, "w")
    mon_fichier.write("wesh")
    mon_fichier.close()
    desti = "\wes"
    desti = desti + "\"
    desti = desti+ n
    shutil.move(n, desti)
