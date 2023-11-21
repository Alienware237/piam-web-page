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
    && apt-get install -y \
        php7.4 php7.4-bcmath php7.4-cli php7.4-common php7.4-curl php7.4-dev php7.4-fpm \
        php7.4-gd php7.4-imap php7.4-intl php7.4-json php7.4-mbstring php7.4-mysql \
        php7.4-opcache php7.4-readline php7.4-soap php7.4-sqlite3 php7.4-tidy php7.4-xsl php7.4-zip \
        php8.0 php8.0-bcmath php8.0-cli php8.0-common php8.0-curl php8.0-dev php8.0-fpm \
        php8.0-gd php8.0-imap php8.0-intl php8.0-mbstring php8.0-mysql php8.0-opcache \
        php8.0-readline php8.0-soap php8.0-sqlite3 php8.0-tidy php8.0-xml php8.0-xsl php8.0-zip

# Enable PHP-FPM and proxy_fcgi
RUN a2enconf php-fpm7.4 php-fpm8.0 \
    && a2enmod proxy_fcgi

# Configure Apache to use proxy_fcgi
RUN { \
      echo "<FilesMatch \.php$>"; \
      echo "  SetHandler \"proxy:fcgi://127.0.0.1:9074\""; \
      echo "</FilesMatch>"; \
      echo "<FilesMatch \.php$>"; \
      echo "  SetHandler \"proxy:fcgi://127.0.0.1:9080\""; \
      echo "</FilesMatch>"; \
    } > /etc/apache2/conf-available/php-fpm.conf \
    && a2enconf php-fpm.conf

# Enable necessary Apache modules and adjust user ID
RUN a2enmod rewrite proxy proxy_http proxy_http2 \
    && usermod -u $DOCKER_USERID www-data

# Restart Apache
CMD ["apache2-foreground"]
