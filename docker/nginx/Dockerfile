FROM nginx:latest

COPY nginx.conf /etc/nginx/
RUN usermod -u 1000 www-data

CMD ["nginx"]
EXPOSE 80
