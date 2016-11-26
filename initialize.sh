#!/bin/bash

docker-compose up -d
docker-compose exec fpm composer install --prefer-dist -n
echo "Dropping database"
docker-compose exec fpm bin/console doctrine:database:drop --force
echo "Creating database"
docker-compose exec fpm bin/console doctrine:database:create
echo "Updating database"
docker-compose exec fpm bin/console doctrine:schema:update --force
echo "Loading database"
docker-compose exec fpm bin/console doctrine:fixtures:load
echo "Done!"
docker-compose run npm gulp
