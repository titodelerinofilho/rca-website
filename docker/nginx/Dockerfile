FROM nginx:latest

RUN rm /etc/nginx/conf.d/default.conf

COPY ./docker/nginx/default.conf /etc/nginx/conf.d/

WORKDIR /var/www/html