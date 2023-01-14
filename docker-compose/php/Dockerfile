FROM php:7.4-apache
#on part d'un image qui existe déjà, une image officiel de php 7 avec apach

#RUN echo "serveName localhost" >> /etc/apache2/apache2.conf
#on personnalise le nom du serveur 

RUN apt-get update \
      && apt-get install  -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev;
# installation de certaines library notamment git et des utlitaires


 RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \ 
     echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \ 
     locale-gen
#on installe les locales 

 RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
      mv composer.phar /usr/local/bin/composer
#on isntalle composer 

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql gd opcache intl zip calendar dom mbstring zip gd xsl
RUN pecl install apcu && docker-php-ext-enable apcu
# on installe des extensions à php 
WORKDIR /var/www/
# si le container est lancer on se retrouve dans se chemin là