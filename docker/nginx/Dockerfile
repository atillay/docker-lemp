FROM debian:jessie

MAINTAINER Benjamin JONARD <jonard.benjamin@gmail.com>

ARG env

RUN apt-get update && apt-get install -y \
    nginx \
    wget

ADD nginx.conf /etc/nginx/
ADD app.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/symfony.conf /etc/nginx/sites-enabled/symfony
RUN rm /etc/nginx/sites-enabled/default

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
