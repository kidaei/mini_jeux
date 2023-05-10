travil réaliserr par Kidaei rawia 
# mini_jeux
On a essayé de créer un mini jeux du même principe du jeu Mario 
## index.html
C'est la première page qui affiche où on trouve deux boutons "Sign Up" et "Login", qui redirigent respectivement vers les fichiers "signup.php" et "login.php" lorsqu'on les clique
## signup.php
une page pour créer un compte ou les données enregistrées  sont stockées dans le fichier "login.csv"
## login.php 
une page pour se connecter au jeu d'abord, il fallait s'identifier.
il vérifie que les informations saisies sont les mêmes stocke dans "login.csv" si oui, il passe à la page du jeu sinon il affiche une "login_faillure.php"
## login_faillure.php
dans la page, on a un button qui se redirige vers la page login.php pour fournir le bon mail et mot de passe 
## game.html
sur la page game.html sur le body, on a mis un lien sur qui import le code JavaScript , et la div qu'on a nommée id s'occupe de compter le nombre de fois que Mario reçoit une pièce  .
Sur la page JS nommée grille. On a créé une fonction buildGrid qui s'occupe de créer une grille, au début de projet la table a été écrit à la main, mais si je l'avais créé  sur HTML les personnages  serait statique, il ne bougerait pas,
fonction "ajoutcell" s'occupe d'ajouter (Mario, monnaie, Luigi, Monster) sur la grille avec leur image.
La fonction "clearcell recuper" rajoute les positions sur la grille, la fonction main définie les positions des acteurs et permet d'appeler les fonctions" ajoutcell , buildgrid".
Dans la dernière partie, on utilise le listener pour rendre le jeu dynamique, pour que ça bouge vers le haut, bas, gauche,droit (ArrowUp,ArrowDown,ArrowLeft,ArrowRight) le fait qu'on utilise la condition if pour qu'une fois Mario passe sur la position de la monnaie, ce dernier disparait et on ajoute monnaie = 1
Sur la page CSS, on a mis comme couleur de la table couleur : chocolat , et modifie la taille de l'image et des cellules de la grille en 150 px  
Futur travail 
# probleme 
si mario dépasse la longeur ou la largeur il disparait ce q'on voulait faire c'est qu'il revient a la position initial c'est le code mis on commentaire 
# le code mis ont commentaire
 
# TO DO in future
-->on voulait ajouter un système de niveau ou à chaque niveau, il donne une position différente des personnages et une taille de grille  
-->Quand Mario atteint la position de  Luigi, il devait afficher un feu d'artifice
-- 