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

# Install PHP-FPM for PHP 8.1
RUN apt-get install -y php8.1-fpm

# Enable PHP-FPM
RUN a2enconf php8.1-fpm

# Enable proxy_fcgi
RUN a2enmod proxy_fcgi

# Configure Apache to use proxy_fcgi
RUN { \
      echo "<FilesMatch \.php$>"; \
      echo "  SetHandler \"proxy:fcgi://127.0.0.1:9000\""; \
      echo "</FilesMatch>"; \
    } > /etc/apache2/conf-available/php-fpm.conf \
    && a2enconf php-fpm.conf

# Enable necessary Apache modules and adjust user ID
RUN a2enmod rewrite proxy proxy_http proxy_http2 \
    && usermod -u $DOCKER_USERID www-data

# Restart Apache
CMD ["apache2-foreground"]
