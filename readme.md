# DOCKER LEMP
- Nginx
- PHP 7.2-fpm
- MySQL
- PHPMyAdmin
- Maildev

## Quickstart 
- Install and launch Docker  
- `cp .env.dist .env`  
- `docker-compose up`
- You can now visit `localhost:8084`, `localhost:8085` and `localhost:8086` 

## About MySQL
If you change mysql infos in .env you have to delete directory: `docker/volumes/mysql` to see changes.   
It will delete the existing database !
