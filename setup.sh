#!/bin/bash

docker-compose up -d;
docker exec -i app composer install;
docker exec -i app php artisan migrate;
npm install; 
npm run dev;