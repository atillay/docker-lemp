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
| Logs         | `docker/volumes/nginx/` |

## About MySQL
If you change mysql infos in .env you have to delete directory: `docker/volumes/mysql` to see changes.   
It will delete the existing database !
