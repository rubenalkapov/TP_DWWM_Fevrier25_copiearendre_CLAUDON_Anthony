# Évaluation en cours de formation

## Graduate développeur PHP/Symfony


Énoncé
Votre examen comporte :

✔ Cet énoncé qui vous présente le sujet de l’épreuve

✔ Une copie à rendre (Excel ou Word) que vous devez télécharger, remplir informatiquement et déposer dans l’espace de dépôt prévu à cet effet.

Renommer votre copie à rendre Word ou Excel comme suit : ECF_NomParcours _copiearendre_NOM_Prenom

Objectifs de l’évaluation : L’évaluation en cours de formation que vous allez réaliser a pour vocation de figurer dans votre livret d’évaluation. Il sera donc remis à votre jury le jour des épreuves du titre professionnel accompagné de votre évaluation et du sujet initial. Nous vous demandons de vous mettre en situation d’examen. Prenez le temps de lire le sujet et de manipuler les annexes afin de répondre en situation professionnelle aux questions et problématiques évoquées dans le sujet

À vous de jouer !

## Informations

Github : https://github.com/rubenalkapov/TP_DWWM_Fevrier25_copiearendre_CLAUDON_Anthony

Démonstration : url du déploiement

```
Adresse email démo      : admin@zoo-arcadia.com
Mot de passe démo       : admin
```

Lien de l'outil de gestion de projet : url du site de gestion de projet


## Réfléxion et configuration de l'environnement de travail

### Résumé du besoin et choix des technologies

### Résumé des besoins et choix technologiques pour le projet

#### Besoins du client
José, le directeur du zoo Arcadia, souhaite moderniser son établissement avec une application web. Cette application doit permettre aux visiteurs de consulter des informations sur les animaux, leurs habitats, les services du zoo, et d'autres éléments clés. Le site doit refléter les valeurs écologiques du zoo. En plus de la partie visible par les visiteurs, l'application doit aussi intégrer des fonctionnalités pour les employés, vétérinaires, et administrateurs du zoo.

Les **utilisateurs** de l'application sont :
1. **Visiteurs** : Accès à une vue globale du zoo, informations sur les animaux, habitats, services, et la possibilité de laisser des avis.
2. **Employés** : Validation des avis des visiteurs, gestion des services et alimentation des animaux.
3. **Vétérinaires** : Saisie des comptes rendus sur la santé des animaux, visualisation des données d'alimentation.
4. **Administrateurs** : Gestion des comptes utilisateurs (employés, vétérinaires), modification des services, horaires, habitats, et animaux, ainsi que l'accès à un tableau de bord de statistiques.

#### Exigences techniques
L'application doit comporter à la fois une base de données relationnelle pour les données structurées et une base de données non relationnelle pour stocker les statistiques de consultation des animaux. La sécurité de l'accès aux différents rôles (administrateurs, vétérinaires, employés) est cruciale.

#### Choix technologiques suggérés
1. **Frontend** : HTML5, CSS3 (avec Tailwind pour le style), et JavaScript pour créer une interface utilisateur fluide et responsive. ReactJS pourrait être un choix approprié pour une interface moderne et dynamique, facile à maintenir et à étendre.

2. **Backend** : PHP avec PDO pour la gestion des interactions avec la base de données relationnelle, garantissant la compatibilité et la sécurité. Slim PHP pourrait être utilisé pour construire une API légère et performante, servant de backbone à l'application.

3. **Base de données** :
   - **Relationnelle** : MySQL, MariaDB ou PostgreSQL pour stocker les informations structurées comme les détails des animaux, des habitats, et des utilisateurs.
   - **NoSQL** : MongoDB pour gérer les statistiques de consultation des animaux.

4. **Déploiement** : Des plateformes comme Heroku, Fly.io, Azure ou Vercel sont recommandées pour un déploiement facile et évolutif de l'application.

5. **Gestion de projet** : Utilisation d'outils comme Jira, Notion ou Trello pour suivre l'avancement du projet, structuré selon une méthode Kanban pour gérer les fonctionnalités à développer, en cours de développement, et finalisées.

En somme, le projet nécessitera une approche modulaire avec une API pour le backend et une interface interactive pour le frontend, offrant ainsi une base solide pour une future extension, telle qu'une application mobile ou un système d'affichage tactile.

### Configuration de l'environement de travail
Travaillant sur un système d'exploitation de type Windows, les informations ci-dessous y seront bien évidement destinées.

Serveur:

Apache
PHP 8.3
MySQL 8.0 / PDO
Backend (API)

HTML 5 (Twig)
CSS 3
Javascript

## Utilisation

### Installation de l'application en local

* **Le petit éléphant bleu**

Laragon est un environnement de développement local moderne, entretenu et riche en fonctionnalités.

Laragon améliore le développement web. Des développeurs du monde entier utilisent Laragon pour créer des applications rapidement et facilement. Il est utilisé par des milliers de développeurs avec amour.

Pour installer **Laragon**, rien de bien compliqué
Il vous suffit juste de cliquer sur ce lien **https://laragon.org/download/**, ce dernier vous redirige vers le site officiel de Laragon

Une fois arrivé sur la page de téléchargements, il vous suffit de cliquer sur la version **Full**, cette dernière embarque la pile logicielles dont nous aurons besoin

Pour embéllir votre logiciel Laragon, il vous suffira d'aller jetez un coup d'oeil à la documentation officielle de Laragon en cliquant sur ce lien https://laragon.org/docs/

Maintenant nous devons changer de version de PHP

Une fois l'installation compléter, nous allons faire quelques vérifications techniques dans le Terminal de votre envireonnement Windows en écrivant simplement :

```
php -v
mysql -v
node -v
npm -v
```

Super ! Maintenant nous allons nous rendre sur http://127.0.0.1/ pour vérifier que notre nouveau serveur web fonctionne à merveille

Maintenant nous allons procéder à l'installation de composer (un gestionnaire de paquets) pour le bon déroulement de l'installation

Pour ce faire il suffit de vous rendre sur ce site : https://getcomposer.org/download/ et de télécharger le setup en éxécutable

Il ne vous reste plus qu'à suivre les instructions d'installation et tout devrait être ok !