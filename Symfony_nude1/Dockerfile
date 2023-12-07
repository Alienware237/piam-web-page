# Stage 1: Build Stage
FROM php:8.2-fpm AS build
ARG DOCKER_USERID="1000"

# Install required dependencies
RUN apt-get update \
    && apt-get install -y libmcrypt4 libmcrypt-dev zlib1g-dev libzip-dev \
    && apt-get install -y libmemcached-dev memcached libmemcached11


# Install required PHP extensions
RUN docker-php-ext-install pdo zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /usr/src/app/piam-web-page

# Copy application files
COPY . .

# Set COMPOSER_ALLOW_SUPERUSER to enable plugins in non-interactive mode
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies using Composer
RUN composer install --ignore-platform-reqs

EXPOSE 8000
CMD php bin/console server:run 0.0.0.0:8000

# Stage 2: Production Stage
FROM nginx:1.15.8-alpine

# Copy NGINX configuration
COPY ../docker/nginx/default.conf /etc/nginx/nginx.conf

# Copy the built application from the build stage
COPY --from=build /usr/src/app/piam-web-page /usr/share/nginx/html
