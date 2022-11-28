#!/bin/bash
cd /etc/server-config

rm /etc/apache2/sites-available/000-default.conf
mv ./000-default.conf /etc/apache2/sites-available/000-default.conf

openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout /etc/ssl/private/key-test.key -out /etc/ssl/certs/cert-test.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=test/CN=localhost"

a2enmod ssl
a2enmod headers

