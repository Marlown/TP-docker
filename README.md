# TP-docker
Un Docker-compose pour l'application crud utilisant symfony

Exécuter localement
Cloner le projet

git clone git clone https://github.com/fourm1/tp_html-css.git   

Exécutez le docker-compose

docker-compose build ou docker-compose up -d

Connectez-vous au conteneur PHP

docker exec -it www_docker_symfony6 bash

Faire des migrations et lancer le serveur interne

composer install -n php bin/console doc:mig:mig --no-interaction php bin/console doc:fix:load --no-interaction symfony serve -d

Créer un compte (identique à votre session locale)

adduser nom d'utilisateur chown nom d'utilisateur:nom d'utilisateur -R .
