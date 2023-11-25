FROM php:8.1-fpm

ARG DOCKER_USERID="1000"

# Install required dependencies for PHP compilation
RUN apt-get update \
    && apt-get install -y libzip-dev unzip libpq-dev librabbitmq-dev libz-dev libmemcached-dev libpng-dev \
        libfreetype6-dev \
        libjpeg-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libicu-dev \
        libxslt-dev \
    && pecl install amqp memcached \
    && docker-php-ext-enable amqp memcached \
    && docker-php-ext-install pdo mysqli pdo_mysql zip gd mbstring xml intl xsl \
    && docker-php-ext-enable opcache

# Install PHP 8.0 and PHP 8.1
RUN apt-get update \
    && apt-get install -y apt-transport-https lsb-release ca-certificates curl software-properties-common \
    && curl -sSL -o /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
    && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list \
    && apt-get update \
    && apt-get install -y php8.1 php8.0

# Install required extensions for PHP 8.1
RUN apt-get install -y php8.1-fpm php8.1-mysql

# Install required extensions for PHP 8.0
RUN apt-get install -y php8.0-fpm php8.0-mysql

# Install Nginx
RUN apt-get install -y nginx

# Enable PHP-FPM
RUN a2enconf php8.1-fpm

# Configure Nginx to use PHP-FPM
COPY docker/nginx/default.conf /etc/nginx/sites-available/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Enable necessary Nginx modules
RUN service nginx start

# Set up www-data user
RUN usermod -u $DOCKER_USERID www-data

CMD ["nginx", "-g", "daemon off;"]
