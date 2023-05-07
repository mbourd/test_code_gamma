# test_code_gamma

1/ Deployer dans l'environnement de dev
- `docker-compose build`
- `docker-compose run --rm --entrypoint=npm frontend install`
- `docker-compose run --rm backend bash` puis à l'intérieur du conteneur :
    - `composer install`
    - `Ctrl+D` pour quitter le conteneur

2/ Lancer les conteneurs
- `docker-compose up -d`
    - attendre que les conteneurs sont lancés
- `docker ps` pour lister tout les conteneurs

## Services docker
| Services        | Version               | Path access           |
|:----------------|:---------------------:|:----------------------|
| database        | MySQL / 8             |                       |
| phpmyadmin      |                       | http://localhost:81   |
| backend         | PHP 8.0 / Symfony 5+  | http://localhost:8001 |
| frontend        | Node 20 /Angular 16   | http://localhost:4201 |

- phpmyadmin server : `database`
- phpmyadmin username / password : `root` / `ChangeMe`

4/ Arreter les conteneurs
- `docker stop <container name>` pour arrêter un conteneur spécifique
- `docker-compose -f 'docker-compose.yml' stop` pour arreter les conteneurs du projet

5/ Deconnecter les conteneurs
- `docker-compose -f 'docker-compose.yml' down` pour retier les connections des conteneurs
