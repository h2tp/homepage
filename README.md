# Homepage
Cette page d'accueil a été réalisée par Benjamin SECLIER (http://generation-linux.fr) à partir du template AdminLTE (https://almsaeedstudio.com/preview).
Ce projet est disponible sous licence CC BY-CA (http://creativecommons.org/licenses/by-sa/3.0/deed.fr).

![Screenshot](https://github.com/bseclier/homepage/raw/master/pages/inc/images/screenshot.jpg)

## Démo
Une page de démo est disponible à l'adresse suivante : http://homepage.elob.fr (login : demo ; Mot de passe : !demo!).
**Il s'agit des mêmes identifiants à entrer quand vous installez le projet chez vous.**

## Installation
Il s'agit de fichiers PHP à héberger sur votre serveur web, aucune base de données n'est nécessaire.

## Conseils
Afin de vous aider dans l'adoption de cet outil, voici quelques conseils et remarques :

##### Site entier
- Vous pouvez faire en sorte que la sidebar ne soit pas minimaliste en supprimant le mot "sidebar-collapse" de la balise body du fichier "pages/inc/header.php".
- Pour désactiver l'authentification, supprimez les 5 premières lignes du fichier "pages/inc/header.php".
- Pour changer le login et/ou le mot de passe, modifier la ligne correspondante (troisième) dans le fichier "pages/login.php".

##### Première page
- Vous pouvez mettre une icône sur les boutons (voir la liste ici) ou mettre un favicon récupéré sur le site en question (dans le répertoire inc/images).
- Il est très simple de remplacer le moteur de recherche du formulaire, il suffit de modifier l'URL dans la page "pages/index.php".

##### Calendrier
- Le fichier ics à afficher est à mettre dans le répertoire "plugins/ics-parser". Il est possible d'afficher plusieurs ics au sein du même calendrier, avec différentes couleurs, une simple boucle PHP est nécessaire.


**Si vous avez des questions, des remarques, vous pouvez me contacter à cette adresse http://blog.elob.fr/index.php?contact ou sur la page github du projet.**
