FROM prestashop/prestashop:1.7.8.7

COPY ssl /etc/server-config
RUN chmod 777 /etc/server-config/ssl-auto.sh
RUN /etc/server-config/ssl-auto.sh

RUN a2enmod ssl

EXPOSE 80
EXPOSE 443

RUN apt-get update
RUN apt install -y libmemcached-dev
RUN pecl install memcached
RUN docker-php-ext-enable memcached

RUN service apache2 restart