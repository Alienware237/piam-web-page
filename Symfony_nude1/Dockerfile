# Stage 1: Build Stage
FROM php:8.2-cli AS build
ARG DOCKER_USERID="1000"

# Install required dependencies
RUN apt-get update \
    && apt-get install -y libmcrypt4 libmcrypt-dev zlib1g-dev libzip-dev \
    && apt-get install -y libmemcached-dev libmemcached11

# Install required PHP extensions
RUN docker-php-ext-install pdo zip

# Install libmemcached from source
RUN mkdir -p /usr/src/libmemcached \
    && curl -SL https://launchpad.net/libmemcached/1.0/1.0.16/+download/libmemcached-1.0.16.tar.gz \
    | tar -xzC /usr/src/libmemcached --strip-components=1 \
    && cd /usr/src/libmemcached

# Install php-memcached from source
RUN pecl install memcached \
    && docker-php-ext-enable memcached \
    && { \
      echo "extension=memcached.so"; \
    } >> /usr/local/etc/php/conf.d/docker-php-ext-memcached.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /usr/src/app/piam-web-page

# Copy application files
COPY . .

# Install dependencies using Composer
RUN composer install

# Stage 2: Production Stage
FROM nginx:1.15.8-alpine

# Copy NGINX configuration
COPY ../docker/nginx/default.conf /etc/nginx/nginx.conf

# Copy the built application from the build stage
COPY --from=build /usr/src/app/piam-web-page /usr/share/nginx/html
