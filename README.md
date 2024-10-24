
# TODOLIST

Bienvenue sur le projet **TODOLIST**, une application web réalisée en PHP avec le framework **Symfony**. Ce projet a pour but de fournir une solution complète de gestion de tâches, avec des fonctionnalités avancées pour la gestion d'équipes et d'utilisateurs.

## 🎯 Objectif du projet

L'objectif de ce projet est de développer une **application de gestion de tâches (TODOLIST)** permettant à un utilisateur de :

- **Créer des tâches** : Ajouter des tâches avec des descriptions et des délais.
- **Modifier des tâches** : Mettre à jour les informations des tâches existantes.
- **Supprimer des tâches** : Effacer les tâches non nécessaires.
- **Marquer les tâches comme terminées** : Gestion de l'état d'une tâche.
- **Authentification utilisateur** : S'authentifier ou s'inscrire via un compte utilisateur classique ou via Google.
- **Gestion d'équipes** : Créer des équipes et ajouter des membres pour partager et collaborer sur des tâches.

## 🚀 Fonctionnalités

- **Authentification sécurisée** : Inscription et connexion avec validation via Google OAuth.
- **Gestion de tâches** : Ajout, modification, suppression, marquage comme terminé.
- **Collaboration en équipe** : Partage de listes de tâches entre les membres d'une équipe.
- **Gestion des priorités** : Ajout de priorités aux tâches pour mieux organiser le travail.
- **Notifications** : Rappels des tâches via email (en intégrant des services tiers).
- **Responsiveness** : Interface adaptée aux mobiles grâce à l'intégration de Bootstrap et TailwindCSS.

## 🛠️ Technologies utilisées

Le projet utilise les technologies suivantes :

- **PHP** : Langage backend principal.
- **Symfony** : Framework PHP pour structurer le projet.
- **Doctrine** : ORM utilisé pour gérer la base de données relationnelle.
- **Twig** : Moteur de templates pour l'affichage des vues.
- **Bootstrap** : Framework CSS pour un design rapide et réactif.
- **TailwindCSS** : Framework utilitaire CSS pour un style moderne et minimaliste.
- **MongoDB** : Base de données NoSQL pour stocker certaines données non relationnelles.
- **Google API** : Intégration pour l'authentification OAuth via Google.

## ⚙️ Installation

### Prérequis

Assurez-vous d'avoir les éléments suivants installés sur votre machine :

- **PHP 8.x** ou supérieur
- **Composer** pour gérer les dépendances PHP
- **Symfony CLI** pour exécuter les commandes Symfony
- **Node.js** et **npm/yarn** pour gérer les assets (optionnel)
- **MongoDB** pour la base de données NoSQL

### Étapes d'installation

1. **Clonez le dépôt** :
   ```bash
   git clone https://github.com/pauldecalf/todolist.git
   cd todolist
    ```

2. **Installez les dépendances PHP** :
    ```bash
   composer install
    ```

   3. **Configurez l'environnement** : Copiez le fichier `.env` et adaptez-le avec vos configurations (base de données, Google API, etc.) :
   ```bash
      cp .env .env.local
      ```

4. **Migrations et base de données** :
    - Créez les tables avec Doctrine :
      ```bash
      php bin/console doctrine:migrations:migrate
      ```
    - Si vous utilisez MongoDB, configurez la connexion dans le fichier `.env.local`.


5. **Installez les dépendances frontend** (optionnel, si vous utilisez Bootstrap/TailwindCSS) :
   ```bash
   npm install
   npm run build
   ```

6. **Démarrez le serveur Symfony** :
   ```bash
   symfony serve
   ```

7. **Accédez à l'application** :
   Ouvrez votre navigateur à l'adresse suivante : [http://localhost:8000](http://localhost:8000).

```bash
php bin/phpunit
```

## 💡 Contributions

Les contributions sont les bienvenues ! N'hésitez pas à soumettre une issue ou une pull request pour toute amélioration ou correction.
