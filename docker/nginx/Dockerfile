FROM debian:jessie

ARG env

RUN apt-get update && apt-get install -y \
    nginx \
    wget

ADD nginx.conf /etc/nginx/
ADD app.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/app.conf /etc/nginx/sites-enabled/app
RUN rm /etc/nginx/sites-enabled/default

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
