FROM php:8.1-apache
ARG DOCKER_USERID="1000"

# php Packete die wir in der Regel Brauchen
RUN apt-get update \
    && apt-get install -y libzip-dev unzip libpq-dev librabbitmq-dev libz-dev libmemcached-dev \
    && pecl install amqp memcached \
    && docker-php-ext-enable amqp memcached \
    && docker-php-ext-install pdo mysqli pdo_mysql zip

# Installation des Debugers für PHP
RUN pecl install xdebug && docker-php-ext-enable xdebug \
    && { \
      echo "xdebug.mode=debug"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.client_port=9003"; \
    } >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# die zu Synfony passende Configuration
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite proxy proxy_http proxy_http2 \
    && usermod -u $DOCKER_USERID www-data
