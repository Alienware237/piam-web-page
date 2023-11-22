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

# Install PHP 7.4 and PHP 8.0
RUN apt-get update \
    && apt-get -y install apt-transport-https lsb-release ca-certificates curl \
    && curl -sSL -o /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
    && sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list' \
    && apt-get update \
    && apt-get install -y php8.1-fpm php8.1-mysql

# Enable PHP-FPM and proxy_fcgi
RUN a2enconf php8.1-fpm

# Configure Apache to use proxy_fcgi
RUN { \
      echo "<FilesMatch \.php$>"; \
      echo "  SetHandler \"proxy:fcgi://127.0.0.1:9074\""; \
      echo "</FilesMatch>"; \
      echo "<FilesMatch \.php$>"; \
      echo "  SetHandler \"proxy:fcgi://127.0.0.1:9080\""; \
      echo "</FilesMatch>"; \
    } > /etc/apache2/conf-available/php-fpm.conf \
    && a2enconf php-fpm

# Enable necessary Apache modules and adjust user ID
RUN a2enmod rewrite proxy proxy_http proxy_http2 \
    && usermod -u $DOCKER_USERID www-data

# Restart Apache
CMD ["apache2-foreground"]
