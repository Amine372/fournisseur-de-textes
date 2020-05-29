import smtplib    # Importation du module
serveur = smtplib.SMTP('smtp-in.orange.fr', 587)    # Connexion au serveur sortant (en précisant son nom et son port)
#serveur.starttls()    # Spécification de la sécurisation
serveur.login("nakhila@orange.fr", "Amine06..")    # Authentification
message = "VOTRE MESSAGE"    # Message à envoyer
serveur.sendmail("nakhila@orange.fr", "nakhila@orange.fr", message)    # Envoie du message
serveur.quit()    # Déconnexion du serveur
