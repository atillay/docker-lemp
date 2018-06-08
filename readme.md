# DOCKER LEMP
- Nginx
- PHP 7.2-fpm
- MySQL
- PHPMyAdmin
- Maildev

## :rocket: Quickstart 
- Install and launch Docker  
- `cp .env.dist .env`  
- `docker-compose up`

| Service      | Path                    |
| ------------ | ----------------------- |
| Website      | `http://localhost:8080` | 
| PhpMyAdmin   | `http://localhost:8081` |
| Mail catcher | `http://localhost:8082` |
| Logs         | `log/`                  |

## About MySQL
If you change mysql infos in .env you have to re-create mysql container :  
- Get the container name : `$ docker-compose ps | grep mysql`
- Remove container : `$ docker-compose rm {container_name}` (ex: `docker-compose rm docker-lemp_mysql_1`)
- Run : `docker-compose up` 