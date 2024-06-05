# Test technique Coquille

Ce test est à réaliser en environ 2 h.
Ne pas hésiter à nous recontacter en cas de problèmes lors de l'installation.

## Installation

**Avec Docker**

1. Installer [Docker](https://www.docker.com/get-started/)
2. Ouvrir un terminal en mode administrateur
3. Se placer dans le dossier du projet
4. Executer la commande ``docker compose up --build`` pour lancer le projet
5. Le site devrait être accessible depuis http://localhost:8000/
6. Have fun !

**Sans Docker**

1. Suivre la documentation de [Symfony](https://symfony.com/doc/current/setup.html) pour configurer l'environment
2. Installer [Nodejs](https://nodejs.org/en/download)
3. Ouvrir un terminal en mode administrateur
4. Se placer dans le dossier du projet
5. Exécuter la commande ``composer install``
6. Exécuter la commande ``npm install``
7. Exécuter la commande ``npm run build``
8. Exécuter la commande ``symfony server:start`` pour lancer le projet
9. Le site devrait être accessible depuis http://localhost:8000/
10. Have fun !

## Compiler le Scss

1. Pour tout recompiler, exécuter la commande ``npm run build``
2. Pour compiler dynamiquement (à chaque changement de fichier), exécuter la commande ``npm run watch``

## Accéder au bash du container docker

1. Ouvrir un terminal en mode administrateur
2. Exécuter la commande ``docker ps -a``
3. Récupérer l'id de l'image du container (ex: 64b173614704)
4. Exécuter la commande ``docker exec -it ID_IMAGE bash``

## Versions

- PHP 8.1
- Composer 2.5
- Nodejs 18.16
- Npm 9.5
- Symfony 6.3
- Symfony CLI 5.5
