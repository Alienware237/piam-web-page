FROM php:7.2-cli AS build
ARG DOCKER_USERID="1000"

RUN apt-get update -y && apt-get install -y libmcrypt-dev

RUN pecl install xdebug && docker-php-ext-enable xdebug \
    && { \
      echo "xdebug.mode=debug"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.client_port=9003"; \
    } >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

WORKDIR /usr/src/app/piam-web-page
COPY . .

RUN composer install

FROM nginx:1.15.8-alpine

# Copying a custom NGINX configuration file because Kimpa application has custom routing
COPY ../docker/nginx/default.conf /etc/nginx/nginx.conf

COPY --from=build /usr/src/app/piam-web-page /usr/share/nginx/html
