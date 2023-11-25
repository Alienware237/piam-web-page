# Stage 1: Build Stage
FROM php:8.2-cli AS build
ARG DOCKER_USERID="1000"

# Install required dependencies
RUN apt-get update -y && apt-get install -y libmcrypt4 libmcrypt-dev zlib1g-dev libzip-dev

# Install xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && { \
      echo "xdebug.mode=debug"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.client_port=9003"; \
    } >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install required PHP extensions
RUN docker-php-ext-install pdo zip

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
