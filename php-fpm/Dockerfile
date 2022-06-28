FROM php:8.1-fpm
RUN apt-get update && apt-get -y install mc vim zlib1g zlib1g-dev libpng-dev libjpeg62-turbo-dev mariadb-client \
    libfreetype6-dev netcat supervisor libcurl4-openssl-dev libzip-dev \
    && docker-php-ext-install bcmath && docker-php-ext-enable bcmath \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
    && docker-php-ext-install pdo && docker-php-ext-enable pdo \
    && docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql \
    && pecl install xdebug && docker-php-ext-enable xdebug \
    && pecl install redis && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install sockets \
    && docker-php-ext-install zip

ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

RUN groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"

RUN ./composer.phar
COPY ./conf.d/custom.ini $PHP_INI_DIR/conf.d/




