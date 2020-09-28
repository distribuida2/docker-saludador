FROM php:7.0-apache
LABEL Description = "Saludador!"

RUN mkdir /app
RUN chown -R www-data /app
RUN ln -s /app /var/www/html/app

WORKDIR /app

#copiamos el vhost
COPY $PWD/saludador.conf /etc/apache2/sites-available/saludador.conf
COPY $PWD/status.conf /etc/apache2/mods-available/status.conf


RUN a2dissite 000-default
RUN a2ensite saludador
RUN a2enmod rewrite
RUN a2enmod status

RUN pecl install redis && docker-php-ext-enable redis  

ENV DEBUG_HEADERS 1

COPY saludador.php /app