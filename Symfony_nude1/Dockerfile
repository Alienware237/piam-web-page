FROM php:8.1-apache
ARG DOCKER_USERID="1000"

# Install required dependencies for PHP compilation
RUN apt-get update \
    && apt-get install -y libzip-dev unzip libpq-dev librabbitmq-dev libz-dev libmemcached-dev \
    && pecl install amqp memcached \
    && docker-php-ext-enable amqp memcached \
    && docker-php-ext-install pdo mysqli pdo_mysql zip

# Install development tools and libraries for PHP compilation
RUN apt-get install -y \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libxslt-dev

# Recompile PHP with thread safety enabled
RUN docker-php-source extract \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo mysqli pdo_mysql zip gd mbstring xml intl xsl \
    && docker-php-source delete \
    && docker-php-ext-enable opcache

# Disable prefork and enable event MPM
RUN a2dismod mpm_prefork && a2enmod mpm_event

# Enable HTTP2
RUN a2enmod http2

# Install and enable Xdebug (if needed)
RUN pecl install xdebug && docker-php-ext-enable xdebug \
    && { \
      echo "xdebug.mode=debug"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.client_port=9003"; \
    } >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Copy Symfony-compatible configuration
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable necessary Apache modules and adjust user ID
RUN a2enmod rewrite proxy proxy_http proxy_http2 \
    && usermod -u $DOCKER_USERID www-data

# Restart Apache
CMD ["apache2-foreground"]
