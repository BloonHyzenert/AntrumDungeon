# AntrumDungeon
***
## Pages
***
### Accueil
La page d'accueil est générée statiquement avec une intro de présentation et une section plus bas des nouveautés avec deux carrousels. Elle est visible par tout le monde.
### Réservation
Cette page est accessible qu'une fois connecté, elle renverra donc à la page de connexion dans le cas contraire. Elle est composé de plusieurs section pour chaque salle à réserver pour les jeux. Un agenda est affiché pour réserver mais n'est pas fonctionnel.
### Forum
Le Forum est accessible par tout le monde mais seul les personnes connectée peuvent créer des sujets. Elle permet d'accéder aux **chats** ou aux **comptes des créateurs des chats**.
Le tableau affiche pour chaque chat, *le nombre de messages* et *la date du dernier message envoyé* grâce un "trigger" qui se lance en cas de nouveau message ou d'une suppression de message.
### Chat
Le chat permet de discuter d'un sujet avec d'autres utilisateurs. Une fois connecté, il est possible via le bouton envoyer, d'envoyer des messages saisis dans la zone de texte à gauche.
On peut voir les anciens messages et aussi accéder au **profil de ceux qui ont parlé dans la conversation** en cliquant sur leur pseudo.
### Connexion
Cette partie permet de se connecter à son compte à l'aide de son Pseudo et son Mot de passe. La fonction mot de passe oublié ne fonctionne pas pour l'instant.
### Profil
Une fois connecté, vous pouvez accéder, via l'icon où est inscrit votre pseudo en haut à droite, à votre profil. Sur chaque profil, vous pourrez voir les conversations en cours du profil et sur le votre, vous pourrez modifier si vous le souhaitez votre mot de passe.
### Admin
Les admins ont accès à une page supplémentaire permettant un seul fonctionnalité, l'ajout d'un utilisateur. Ce bouton renvoi à une page de création de compte qui permettra en renseignant le pseudo et un double du mot de passe de créer un nouvel utilisateur.

## Technique
***
### Administration
Les administrateurs ont, en plus de la page, accès à d'autres fonctions. Ils peuvent sur la page Forum, supprimer un sujet ou alors sur la page Chat, supprimer un message.

### Déconnexion
Une fois connecté, vous pouvez vous déconnecter, ce qui mettra fin au compte et vous renverra au menu de connexion.

### Icon Dé
Renvoi à l'Accueil

### Icon compte
Robot pour les admins, elle renvoie au profil si un compte est actif sinon à la page de connexion.

### MDP
Admin : Bloon; Mdp : Hyzenert

Compte : Xander; Mdp : Anno
